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

use Leaps;
use Leaps\Base\Model;
use Common\Model\Admin;

/**
 * 登陆表单
 */
class LoginForm extends Model
{

	public $username;

	public $password;

	/**
	 * 用户组件
	 * @var \Leaps\Web\User
	 */
	private $_user;

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			// username and password are both required
			[
				[
					'username',
					'password'
				],
				'required'
			],
			// password is validated by validatePassword()
			[
				'password',
				'validatePassword'
			]
		];
	}

	/**
	 * 验证密码
	 * This method serves as the inline validation for password.
	 *
	 * @param string $attribute the attribute currently being validated
	 * @param array $params the additional name-value pairs given in the rule
	 */
	public function validatePassword($attribute, $params)
	{
		if (! $this->hasErrors ()) {
			$user = $this->getUser ();
			if (! $user || ! $user->validatePassword ( $this->password )) {
				$this->addError ( $attribute, '错误的用户名或密码。' );
			}
		}
	}

	/**
	 * 登陆
	 *
	 * @return boolean whether the user is logged in successfully
	 */
	public function login()
	{
		if ($this->validate ()) {
			return Leaps::$app->user->login ( $this->getUser (), 0 );
		} else {
			return false;
		}
	}

	/**
	 * Finds user by [[username]]
	 *
	 * @return User|null
	 */
	protected function getUser()
	{
		if ($this->_user === null) {
			$this->_user = Admin::findByUsername ( $this->username );
		}

		return $this->_user;
	}
}
