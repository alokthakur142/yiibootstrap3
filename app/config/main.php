<?php
/**
 *
 * main.php configuration file
 *
 * @author Pascal Brewing <pascalbrewing@gmail.com>
 * @link http://www.pascal-brewing.de
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'main');

use Yiinitializr\Helpers\ArrayX;

// web application configuration
return array(
    'name' => '{APPLICATION NAME}',

    // path aliases
    'aliases' => array(
        'bootstrap' => dirname(__FILE__) . '/../lib/vendor/drmabuse/yii-bootstrap-3-module',
    ),
    'import' => array(
        'bootstrap.*',
//        'bootstrap.components.*',
        'bootstrap.helpers.*',
        'bootstrap.widgets.*',
        'bootstrap.behaviors.*',
    ),
    // application behaviors
    'behaviors' => array(),

    // controllers mappings
    'controllerMap' => array(),
    // application components
    'components' => array(

        'BsHtml' => array(
            'class' => 'bootstrap.helpers.BsHtml'
        ),
//        'chartjs'=>array(
//            'class' => 'chartjs.components.ChartJs'
//        ),
        'urlManager' => array(
            // uncomment the following if you have enabled Apache's Rewrite module.
            'urlFormat' => 'path',
            'showScriptName' => false,

            'rules' => array(
                // default rules
                'doc' => 'site/doc',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'user' => array(
            'allowAutoLogin' => true,
        ),

        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
    ),
    // application parameters
    'params' => array(
        'version' => ' Version 0.0.8 ',
    ),
);
