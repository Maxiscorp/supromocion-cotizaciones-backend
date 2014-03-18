<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'timeZone'=>'America/Argentina/Buenos_Aires',
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Su Promoción | Sistema de Cotizaciones',
    'sourceLanguage' => 'es',
    'language' => 'es',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.yii-mail.YiiMailMessage',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'doraemon7d9',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1', '192.168.2.40', '192.168.2.41', '192.168.2.42', '200.69.30.195'),
        ),
    ),
	
    'behaviors' => array(
        'onBeginRequest' => array(
            'class' => 'application.components.RequireLogin'
        )
    ),
    // application components
    'components' => array(
        'mail' => array(
            'class' => 'ext.yii-mail.YiiMail',
            'transportType' => 'smtp',
            'transportOptions' => array(
                'host' => 'r101.websiteservername.com',
                'username' => 'mtejada@sysnetic.com.ar',
                'password' => 'mundial2006',
                 'port' => '465',
            ),
            'viewPath' => 'application.views.mail',
            'logging' => true,
            'dryRun' => false
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class' => 'WebUser'
        ),
        // uncomment the following to enable URLs in path-format
        'widgetFactory' => array(
            'widgets' => array(
                'CJuiAccordion' => array(
                    'themeUrl' => '/css',
                    'theme' => 'cjuiaccordion',
                ),
                'CJuiTabs' => array(
                    'themeUrl' => '/css',
                    'theme' => 'cjuitabs',
                    'cssFile' => 'jquery-ui.css',
                ),
        )),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'caseSensitive' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        /*
          'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ),
         * 
         */
        // uncomment the following to use a MySQL database

        'db' => array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=sysne621_supromocion;port=3306;',
            //'emulatePrepare' => true,
            'username' => 'sysne621_promo',
            'password' => 'doraemon7d9',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages

             array(
              'class'=>'CWebLogRoute',
              ), 

            ),
        ),
        
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'mtejada@sysnetic.com.ar',
        'upload_path_base' =>  '/home/sysne621/public_html/archivos/supromocion/',
        'debugEmail' => 'mtejada@sysnetic.com.ar'
    ),
);