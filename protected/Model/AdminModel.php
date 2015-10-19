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
namespace Model;

use Leaps\Db\Eloquent\Model;

class AdminModel extends Model
{
	/**
	 * 主键
	 *
	 * @var string
	 */
	public static $key;

	/**
	 * 表明
	 *
	 * @var string
	 */
	public static $table;

	/**
	 * 可批量赋值的字段
	 *
	 * @var array
	 */
	public static $fillable;

	/**
	 * 隐藏的字段
	 *
	 * @var array
	 */
	public static $hidden;
}