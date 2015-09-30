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
				'crypt' => [
						'className' => ''
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
		'modules' => [ ],
		'aliases' => [ ]
];