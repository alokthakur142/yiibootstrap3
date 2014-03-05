module.exports = function (grunt) {
    'use strict';

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        bumpup: ['package.json', 'composer.json'],

        release: {
            options: {
                bump: false, //default: true
                tagName: 'v<%= version %>', //default: '<%= version %>'
                commitMessage: 'release v<%= version %>', //default: 'release <%= version %>'
                tagMessage: 'tagging version v<%= version %>' //default: 'Version <%= version %>'
            }
        },

        replace: {
            readme: {
                src: ['README.md'],
                overwrite: true,
                replacements: [
                    {
                        from: /Version \d{1,1}\.\d{1,2}\.\d{1,2}/g,
                        to: 'Version <%= pkg.version %>'
                    }
                ]
            },
            home_php: {
                src: ['app/views/site/home.php'],
                overwrite: true,
                replacements: [
                    {
                        from: /Version \d{1,1}\.\d{1,2}\.\d{1,2}/g,
                        to: 'Version <%= pkg.version %>'
                    }
                ]
            },
            config_dev:{
                src: ['app/config/main.php'],
                overwrite: true,
                replacements: [
                    {
                        from: /Version \d{1,1}\.\d{1,2}\.\d{1,2}/g,
                        to: 'Version <%= pkg.version %>'
                    }
                ]
            }
        },
        sass: {                              // Task
            bootstrap:{
                options: {                       // Target options
                    style:                                              'compressed'
                },
                files: {                         // Dictionary of files
                    'www/css/bootstrap.css':                            'www/dev/scss/app.scss',   // 'destination': 'source'
                    'www/css/application-<%= pkg.version %>.min.css':   'www/dev/scss/app.scss'   // 'destination': 'source'
                }
            }
        },
        concat: {
            application_js: {
                src: [
                    'www/js/bootstrap.min.js',
                    'www/js/holder.js'
                ],
                dest: 'www/js/application-<%= pkg.version %>.min.js'
            }
        },
        watch: {
            app:{
                files: 'www/css/bootstrap.css',
                tasks: ['concat']
            },
            sass:{
                files: 'www/**/*.scss',
                tasks: ['sass']
            },
            app_theme:{
                files: 'www/css/bootstrap-theme.css',
                tasks: ['concat']
            },
            app_less:{
                files: 'www/dev/less/bootstrap.less',
                tasks: ['recess:bootstrap','recess:min']
            },
            app_theme_less:{
                files: 'www/dev/less/theme.less',
                tasks: ['recess:theme','recess:theme_min']
            }
        }
    });
    grunt.loadNpmTasks('grunt-release');
    grunt.loadNpmTasks('grunt-bumpup');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-recess');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Default task(s).
    grunt.registerTask('default', ['replace', 'release']);

};