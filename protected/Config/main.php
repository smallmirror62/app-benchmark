<?php
// +----------------------------------------------------------------------
// | Leaps Framework [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011-2014 Leaps Team (http://www.tintsoft.com)
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author XuTongle <xutongle@gmail.com>
// +----------------------------------------------------------------------
return [
		'basePath' => dirname ( __DIR__ ),
		'charset' => 'UTF-8',
		'timeZone' => 'Etc/GMT-8',
		'language' => 'zh-CN',
		'fallback_language' => 'en',
		'vendorPath' => dirname ( dirname ( __DIR__ ) ) . '/vendor',
		'services' => [
				'cache' => [
						'className' => '\Leaps\Cache\ArrayCache',
						'keyPrefix' => ''
				],
				'log' => [
						'targets' => [
								'file' => [
									'className' => 'Leaps\Log\FileTarget',
									'levels' => ['trace', 'info'],
									'categories' => ['yii\*'],
								],
								'email' => [
									'className' => 'Leaps\Log\EmailTarget',
									'levels' => ['error', 'warning'],
									'message' => [
									'to' => 'admin@example.com',
								]
							]
						]
				],
				'db' => [
						'profile' => false,
						'fetch' => \PDO::FETCH_CLASS,
						'defaultConnection' => 'mysql',
						'connections' => [
								'sqlite' => [
										'driver' => 'sqlite',
										'database' => 'application',
										'prefix' => ''
								],

								'mysql' => [
										'driver' => 'mysql',
										'host' => '127.0.0.1',
										'database' => 'leaps',
										'username' => 'root',
										'password' => '123456',
										'charset' => 'utf8',
										'prefix' => 'yun_'
								],

								'pgsql' => [
										'driver' => 'pgsql',
										'host' => '127.0.0.1',
										'database' => 'database',
										'username' => 'root',
										'password' => '',
										'charset' => 'utf8',
										'prefix' => '',
										'schema' => 'public'
								],

								'sqlsrv' => [
										'driver' => 'sqlsrv',
										'host' => '127.0.0.1',
										'database' => 'database',
										'username' => 'root',
										'password' => '',
										'prefix' => ''
								]
						]
				],
				'session' => [
						'className' => ''
				],
				'cookie' => [
						'className' => ''
				],
				'router' => [
						'enablePrettyUrl' => true,
						'enableStrictParsing' => false,
						'enableRuleCache' => false,
						'showScriptName' => false,
						'suffix' => '',
						'rules' => [
								'newcustomer' => 'content/index/newcustomer',
								'content/<catid:\w+>/<id:\w+>' => 'content/index/show',
								'content/<catid:\w+>' => 'content/index/lists'
						]
				],
				'queue' => [
						'className' => ''
				],
				'file' => [
						'className' => ''
				],
				'storage' => [
						'className' => ''
				],
				'image' => [
						'className' => ''
				]
		],
		'modules' => [
				'home' => [
						'className' => 'App\Module\Home\Module',
						'controllerNamespace' => 'App\Module\System\Controller',
						'defaultRoute' => 'index'
				]
		],
		'aliases' => [ ]
];