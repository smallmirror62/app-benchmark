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
require ('../protected/wekit.php');
$config = include '../protected/Config/web.php';
define('LEAPS_ENABLE_ERROR_HANDLER', true);
$application = new \Leaps\Application\WebApplication ( $config );
$application->run ();
