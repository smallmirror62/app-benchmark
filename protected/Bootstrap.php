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
/**
 * Your environment.
 * Can be set to any of the following:
 *
 * dev/prod/test
 */
define('LEAPS_ENV', 'dev');
define('LEAPS_DEBUG', true);
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/framework/Leaps.php';