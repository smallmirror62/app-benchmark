<?php
$params = array_merge ( require (__DIR__ . '/../../Common/Config/params.php'), require (__DIR__ . '/../../Common/Config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
	'id' => 'Console',
	'basePath' => dirname ( __DIR__ ),
	'bootstrap' => [ 
		'log' 
	],
	'controllerNamespace' => 'Console\Controller',
	'services' => [ 
		'log' => [ 
			'targets' => [ 
				[ 
					'class' => 'Leaps\Log\FileTarget',
					'levels' => [ 
						'error',
						'warning' 
					] 
				] 
			] 
		] 
	],
	'params' => $params 
];
