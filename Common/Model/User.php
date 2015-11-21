<?php

namespace Common\Model;

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