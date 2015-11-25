<?php

namespace Common\Model;

use Leaps\Behavior\TimestampBehavior;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
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