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
	/**
	 * 登陆用户名
	 *
	 * @var string
	 */
	public $username;
	
	/**
	 * 登陆密码
	 *
	 * @var string
	 */
	public $password;
	
	/**
	 * 是否记住登陆
	 *
	 * @var boolean
	 */
	public $rememberMe = true;
	
	/**
	 * 用户模型
	 *
	 * @var Admin $_user
	 */
	private $_user;
	
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			// 用户名和密码是必填的
			[ 
				[ 
					'username',
					'password' 
				],
				'required' 
			],
			// 记住我是个布尔
			[ 
				'rememberMe',
				'boolean' 
			],
			// 密码验证 validatePassword()
			[ 
				'password',
				'validatePassword' 
			] 
		];
	}
	
	/**
	 * 验证密码
	 * 此方法用作密码的内联验证。
	 *
	 * @param string $attribute 目前正在验证的属性
	 * @param array $params 规则中给出的附加名称值对
	 */
	public function validatePassword($attribute, $params)
	{
		if (! $this->hasErrors ()) {
			$user = $this->getUser ();
			if (! $user || ! $user->validatePassword ( $this->password )) {
				$this->addError ( $attribute, 'Incorrect username or password.' );
			}
		}
	}
	
	/**
	 * 登录用户使用所提供的用户名和密码。
	 *
	 * @return boolean 用户是否已成功登录
	 */
	public function login()
	{
		if ($this->validate ()) {
			return Leaps::$app->user->login ( $this->getUser (), $this->rememberMe ? 3600 * 24 * 30 : 0 );
		} else {
			return false;
		}
	}
	
	/**
	 * 查找用户 [[username]]
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
