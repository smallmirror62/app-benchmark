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
namespace Backend\Controller;

use Leaps;
use Leaps\Web\Controller;

class SiteController extends Controller
{

	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return [
			'error'=> [
				'className'=> 'Leaps\Web\ErrorAction'
			]
		];
	}

	/**
	 * 首页
	 */
	public function IndexAction()
	{
		return $this->render ( 'index' );
	}

	/**
	 * 登陆
	 */
	public function LoginAction()
	{
		if (! \Leaps::$app->user->isGuest) {
			return $this->goHome ();
		}
		$model = new LoginForm ();
		if ($model->load ( Leaps::$app->request->post () ) && $model->login ()) {
			return $this->goBack ();
		} else {
			$this->layout = false;
			return $this->render ( 'login', [
				'model'=> $model
			] );
		}
	}

	/**
	 * 退出
	 */
	public function LogoutAction()
	{
		Leaps::$app->user->logout ();
		return $this->goHome ();
	}
}