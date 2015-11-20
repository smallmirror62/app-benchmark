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
use Backend\Model\LoginForm;
use Leaps\Filter\VerbFilter;
use Leaps\Filter\AccessControl;

class SiteController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [ 
			'access' => [ 
				'className' => AccessControl::className (),
				'rules' => [ 
					[ 
						'actions' => [ 
							'login',
							'error' 
						],
						'allow' => true 
					],
					[ 
						'actions' => [ 
							'logout',
							'index' 
						],
						'allow' => true,
						'roles' => [ 
							'@' 
						] 
					] 
				] 
			],
			'verbs' => [ 
				'className' => VerbFilter::className (),
				'actions' => [ 
					'logout' => [ 
						'post' 
					] 
				] 
			] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return [ 
			'error' => [ 
				'className' => 'Leaps\Web\ErrorAction' 
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
	public function LoginAction()
	{
		if (! \Leaps::$app->user->isGuest) {
			return $this->goHome ();
		}
		
		$model = new LoginForm ();
		if ($model->load ( Leaps::$app->request->post () ) && $model->login ()) {
			return $this->goBack ();
		} else {
			return $this->render ( 'login', [ 
				'model' => $model 
			] );
		}
	}
}