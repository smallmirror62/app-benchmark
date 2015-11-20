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
namespace Backend\Asset;

use Leaps\Web\AssetBundle;

class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	
	/**
	 * CSS
	 *
	 * @var array $css
	 */
	public $css = [ 
		'css/site.css' 
	];
	
	/**
	 * JS
	 *
	 * @var array
	 */
	public $js = [ ];
	
	/**
	 * 依赖
	 *
	 * @var array
	 */
	public $depends = [ 
		'Leaps\Web\LeapsAsset',
		'Leaps\Bootstrap\BootstrapAsset' 
	];
}
