module.exports = function (grunt) {
    'use strict';
    var extIbuttonAsset = 'extensions/ibutton/resources/css/';
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
//            ibuttondist: {                            // Target
//                options: {                       // Target options
//                    style: 'compact'
//                },
//                files: {                         // Dictionary of files
//                    'extensions/ibutton/resources/css/jquery.ibutton.css': extIbuttonAsset + 'jquery.ibutton.scss'       // 'destination': 'source'
//                }
//            },
//            ibuttonprod: {
//                options: {                       // Target options
//                    style: 'compressed'
//                },
//                files: {                         // Dictionary of files
//                    'extensions/ibutton/resources/css/jquery.ibutton.min.css': extIbuttonAsset + 'jquery.ibutton.scss'       // 'destination': 'source'
//                }
//            },
            bootstrap:{
                options: {                       // Target options
                    style: 'compressed'
                },
                files: {                         // Dictionary of files
//                    'www/css/bootstrap.css':                              'bower_components/bootstrap-sass/lib/bootstrap.scss',   // 'destination': 'source'
                    'www/css/bootstrap.css':                              'www/dev/scss/app.scss',   // 'destination': 'source'
                    'www/css/application-<%= pkg.version %>.min.css':                              'www/dev/scss/app.scss'   // 'destination': 'source'
//                    'www/css/application-<%= pkg.version %>.min.css':     'bower_components/bootstrap-sass/lib/bootstrap.scss'   // 'destination': 'source'
                }
            }
        },
        concat: {
//            application_css: {
//                src: [
//                    'www/css/bootstrap.min.css'
//                ],
//                dest: 'www/css/application-<%= pkg.version %>.min.css'
//            },
            application_js: {
                src: [
                    'www/js/bootstrap.min.js',
                    'www/js/holder.js'
                ],
                dest: 'www/js/application-<%= pkg.version %>.min.js'
            }
        },
//        recess: {
//            options: {
//                compile: true
//            },
//            bootstrap: {
//                src: ['www/dev/less/bootstrap.less'],
//                dest: 'www/css/bootstrap.css'
//            },
//            min: {
//                options: {
//                    compress: true
//                },
//                src: ['www/dev/less/bootstrap.less'],
//                dest: 'www/css/bootstrap.min.css'
//            },
//            theme: {
//                src: ['www/dev/less/theme.less'],
//                dest: 'www/css/bootstrap-theme.css'
//            },
//            theme_min: {
//                options: {
//                    compress: true
//                },
//                src: ['www/dev/less/theme.less'],
//                dest: 'www/css/bootstrap-theme.min.css'
//            }
//
//        },
        watch: {
            ibuttoncss: {
                files: extIbuttonAsset + 'jquery.ibutton.scss',
                tasks: ['sass:ibuttondist', 'sass:ibuttonprod']

            },
            app:{
                files: 'www/css/bootstrap.css',
                tasks: ['concat']
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