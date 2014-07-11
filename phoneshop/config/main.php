<?php
define('APP_DIR', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'));
define('TMP_DIR', APP_DIR . DIRECTORY_SEPARATOR . 'temp');

// This is the main Web application configuration. Any writable
// application properties can be configured here.
return array(
	'basePath'=>APP_DIR,
        'runtimePath'=>TMP_DIR,
	'name'=>'Yii Framework: Phones Shop Demo',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	// application components
	'components'=>array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'caseSensitive' => false,
            'rules' => array(
                # Index contorller level
                'gii' => 'gii',
                'login' => 'index/login',
                'logout' => 'index/logout',
                '<controller:\w+>' => '<controller>/index',

                # Modules level
                '<module:\w+>/<action:\w+>' => '<module>/index/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<submodule:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<submodule>/<controller>/<action>',

                # Default database connection ID
                'connectionID' => 'dbDefault'
            ),
        ),
		'db'=>array(
			'connectionString'=>'sqlite:protected/data/phonebook.db',
		),
	),
    'modules' => array(
        'shop' => array(
            'theme' => 'redmond'
        )
    )
);