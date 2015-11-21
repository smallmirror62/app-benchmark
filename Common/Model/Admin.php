<?php

namespace Common\Model;

use Leaps;
use Leaps\Db\ActiveRecord;
use Leaps\Web\IdentityInterface;
use Leaps\Behavior\TimestampBehavior;
use Leaps\Base\NotSupportedException;

class Admin extends ActiveRecord implements IdentityInterface
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
			['status','default','value'=> self::STATUS_ACTIVE],
			['status','in','range'=> [self::STATUS_ACTIVE,self::STATUS_DELETED]]
		];
	}

	/**
	 * @inheritdoc
	 */
	public static function findIdentity($id)
	{
		return static::findOne ( [ 'id' => $id,'status' => self::STATUS_ACTIVE ] );
	}

	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		throw new NotSupportedException ( '"findIdentityByAccessToken" is not implemented.' );
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
	 * 通过用户名查找用户
	 *
	 * @param string $username
	 * @return static|null
	 */
	public static function findByUsername($username)
	{
		return static::findOne ( [ 'username' => $username,'status' => self::STATUS_ACTIVE ] );
	}

	/**
	 * 通过邮箱查找用户
	 *
	 * @param string $email
	 * @return static|null
	 */
	public static function findByEmail($email)
	{
		return static::findOne ( [ 'email' => $email,'status' => self::STATUS_ACTIVE ] );
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
	 * 设置密码
	 *
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->password_hash = Leaps::$app->security->generatePasswordHash ( $password );
	}

	/**
	 * Generates "remember me" authentication key
	 */
	public function generateAuthKey()
	{
		$this->auth_key = Leaps::$app->security->generateRandomString ();
	}
}