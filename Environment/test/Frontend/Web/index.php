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
// Good morning the world!
defined ( 'LEAPS_DEBUG' ) or define ( 'LEAPS_DEBUG', true );
defined ( 'LEAPS_ENV' ) or define ( 'LEAPS_ENV', 'test' );

require (__DIR__ . '/../../vendor/autoload.php');
require (__DIR__ . '/../../vendor/leaps/framework/Leaps.php');
require (__DIR__ . '/../../Common/Config/Bootstrap.php');
require (__DIR__ . '/../Config/bootstrap.php');

$config = Leaps\Helper\ArrayHelper::merge ( require (__DIR__ . '/../../Common/Config/main.php'), require (__DIR__ . '/../../Common/Config/main-local.php'), require (__DIR__ . '/../Config/main.php'), require (__DIR__ . '/../Config/main-local.php') );

$application = new Leaps\Web\Application ( $config );
$application->run ();