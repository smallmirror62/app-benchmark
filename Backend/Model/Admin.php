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
namespace Backend\Model;

use Leaps\Behavior\TimestampBehavior;

class User
{

	const STATUS_DELETED = 0;

	const STATUS_ACTIVE = 1;

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%user}}';
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [ 
			TimestampBehavior::className () 
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [ 
			[ 
				'status',
				'default',
				'value' => self::STATUS_ACTIVE 
			],
			[ 
				'status',
				'in',
				'range' => [ 
					self::STATUS_ACTIVE,
					self::STATUS_DELETED 
				] 
			] 
		];
	}
}