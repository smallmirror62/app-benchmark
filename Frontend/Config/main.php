<?php
$params = array_merge ( require (__DIR__ . '/../../Common/Config/params.php'), require (__DIR__ . '/../../Common/Config/params-local.php'), require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [ 
	'id' => 'Frontend',
	'basePath' => dirname ( __DIR__ ),
	'bootstrap' => [ 
		'log' 
	],
	'controllerNamespace' => 'Frontend\Controller',
	'services' => [ 
		'user' => [ 
			'identityClass' => 'Common\Models\User',
			'enableAutoLogin' => true 
		],
		'log' => [ 
			'traceLevel' => LEAPS_DEBUG ? 3 : 0,
			'targets' => [ 
				[ 
					'className' => 'Leaps\Log\FileTarget',
					'levels' => [ 
						'error',
						'warning' 
					] 
				] 
			] 
		],
		'errorHandler' => [ ]
		// 'errorAction' => 'site/error'
		 
	],
	'params' => $params 
];