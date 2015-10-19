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
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/framework/Leaps.php';
/**
 * Your environment.
 * Can be set to any of the following:
 *
 * \Leaps\Kernel::DEVELOPMENT
 * \Leaps\Kernel::TEST
 * \Leaps\Kernel::PRODUCTION
*/
\Leaps\Kernel::$env = (isset ( $_SERVER ['LEAPS_ENV'] ) ? $_SERVER ['LEAPS_ENV'] : Leaps\Kernel::DEVELOPMENT);
