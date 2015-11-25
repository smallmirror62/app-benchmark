<?php

/* @var $this \Leaps\Web\View */
/* @var $content string */
use Leaps\Helper\Html;
use Backend\Asset\AppAsset;
use Leaps\SmartAdmin\ActiveForm;

AppAsset::register ( $this );
$this->title = '登陆';
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Leaps::$app->language ?>" id="extr-page">
<head>
<meta charset="<?= Leaps::$app->charset ?>">
<?= Html::csrfMetaTags()?>
<title><?= Html::encode($this->title) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php $this->head()?>
<!-- #APP SCREEN / ICONS -->
<!-- Specifying a Webpage Icon for Web Clip
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Startup image for web apps -->
<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
</head>
<body class="animated fadeInDown">
<?php $this->beginBody()?>
	<header id="header">
		<div id="logo-group">
			<span id="logo"> <img src="img/logo.png" alt="管理中心">
			</span>
		</div>
	</header>
	<div id="main" role="main">
		<!-- MAIN CONTENT -->
		<div id="content" class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
					<h1 class="txt-color-red login-header-big">管理中心</h1>
					<div class="hero">
						<div class="pull-left login-desc-box-l">
							<h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
							<div class="login-app-icons">
								<a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a> <a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
							</div>
						</div>
						<img src="img/demo/iphoneview.png" class="pull-right display-image" alt="" style="width: 210px">
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h5 class="about-heading">About SmartAdmin - Are you up to date?</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h5 class="about-heading">Not just your average template!</h5>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
					<div class="well no-padding">
						<?php $form = ActiveForm::begin(['id' => 'login-form','options'=>['class'=>'smart-form client-form']]); ?>
							<header> 登陆 </header>
						<fieldset>
								 <?= $form->field($model, 'username',['icon'=>'fa-lock','tooltip'=>'请输入用户名'])->label('用户名');?>
								 <?= $form->field($model, 'password')->passwordInput(['icon'=>'fa-lock','tooltip'=>'请输入密码'])->label('密码');?>
								</fieldset>
						<footer>
								<?= Html::submitButton('登陆', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
							</footer>
						<?php ActiveForm::end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================================== -->
	<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
	<![endif]-->
	<!-- MAIN APP JS FILE -->
	<script src="js/app.min.js"></script>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>