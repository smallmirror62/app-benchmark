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
// 记录开始运行时间
define ( 'START_TIME', microtime ( true ) );
// 记录内存初始使用
defined ( 'START_MEM' ) or define ( 'START_MEM', memory_get_usage () );

require dirname(__DIR__) . '/vendor/autoload.php';

//Register the autoloader
spl_autoload_register ( [ '\Leaps\Kernel','autoload' ], true, true );

/**
 * Your environment.
 * Can be set to any of the following:
 *
 * \Leaps\Kernel::DEVELOPMENT
 * \Leaps\Kernel::TEST
 * \Leaps\Kernel::STAGING
 * \Leaps\Kernel::PRODUCTION
*/
\Leaps\Kernel::$env = (isset ( $_SERVER ['LEAPS_ENV'] ) ? $_SERVER ['LEAPS_ENV'] : Leaps\Kernel::DEVELOPMENT);

$di = \Leaps\Kernel::getDi();
$di->set('Crypt','\Leaps\Crypt\Crypt');
$crypt = $di->get('Crypt');
print_r($crypt);
exit;

class Wekit{

	public $config;
	public $app;

	/**
	 * 构造方法
	 */
	public function __construct(){
		//$this->app = new Leaps\Web\App();
		echo '初始化应用程序';
	}

	public function run(){
		//$thos->app->run();
		echo '执行应用程序';
	}
}