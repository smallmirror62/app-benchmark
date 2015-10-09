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
						'className' => ''
				],
				'db' => [
						'className' => ''
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