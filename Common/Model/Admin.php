<?php

namespace Common\Model;

use Leaps;
use Leaps\Behavior\TimestampBehavior;
use Leaps\Base\NotSupportedException;

/**
 * Admin model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password 只写密码
 */
class Admin
{

	const STATUS_DELETED = 0;

	const STATUS_ACTIVE = 1;

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%admin}}';
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

	/**
	 * @inheritdoc
	 */
	public static function findIdentity($id)
	{
		return static::findOne ( [ 
			'id' => $id,
			'status' => self::STATUS_ACTIVE 
		] );
	}

	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		throw new NotSupportedException ( '"findIdentityByAccessToken" is not implemented.' );
	}

	/**
	 * 通过用户名查找用户
	 *
	 * @param string $username
	 * @return static|null
	 */
	public static function findByUsername($username)
	{
		return static::findOne ( [ 
			'username' => $username,
			'status' => self::STATUS_ACTIVE 
		] );
	}

	/**
	 * @inheritdoc
	 */
	public function getId()
	{
		return $this->getPrimaryKey ();
	}

	/**
	 * @inheritdoc
	 */
	public function getAuthKey()
	{
		return $this->auth_key;
	}

	/**
	 * @inheritdoc
	 */
	public function validateAuthKey($authKey)
	{
		return $this->getAuthKey () === $authKey;
	}

	/**
	 * 验证密码是否正确
	 *
	 * @param string $password password to validate
	 * @return boolean if password provided is valid for current user
	 */
	public function validatePassword($password)
	{
		return Leaps::$app->security->validatePassword ( $password, $this->password_hash );
	}

	/**
	 * 创建密码哈希
	 *
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->password_hash = Leaps::$app->security->generatePasswordHash ( $password );
	}

	/**
	 * 创建记住我的Key
	 */
	public function generateAuthKey()
	{
		$this->auth_key = Leaps::$app->security->generateRandomString ();
	}
}