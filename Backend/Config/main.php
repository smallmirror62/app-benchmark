<?php
$params = array_merge (
		require (__DIR__ . '/../../Common/Config/params.php'),
		require (__DIR__ . '/../../Common/Config/params-local.php'),
		require (__DIR__ . '/params.php'),
		require (__DIR__ . '/params-local.php')
);

return [
	'id' => 'Backend',
	'basePath' => dirname ( __DIR__ ),
	'controllerNamespace' => 'Backend\Controller',
	'bootstrap' => [
		'log'
	],
	'modules' => [ ],
	'services' => [
		'user' => [
			'identityClass' => 'Common\Model\User',
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
		'errorHandler' => [
			'errorAction' => 'site/error'
		]
	],
	'params' => $params
];
