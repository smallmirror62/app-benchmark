<?php

/* @var $this \Leaps\Web\View */
/* @var $content string */
use Backend\Asset\AppAsset;
use Leaps\Helper\Html;
use Leaps\Bootstrap\Nav;
use Common\Widget\Alert;
use Leaps\Bootstrap\NavBar;
use Leaps\Widget\Breadcrumbs;

AppAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Leaps::$app->language ?>">
<head>
<meta charset="<?= Leaps::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags()?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<div class="wrap">
    <?php
				NavBar::begin ( [ 
					'brandLabel' => 'My Company',
					'brandUrl' => Leaps::$app->homeUrl,
					'options' => [ 
						'class' => 'navbar-inverse navbar-fixed-top' 
					] 
				] );
				$menuItems = [ 
					[ 
						'label' => 'Home',
						'url' => [ 
							'/site/index' 
						] 
					] 
				];
				if (Leaps::$app->user->isGuest) {
					$menuItems [] = [ 
						'label' => 'Login',
						'url' => [ 
							'/site/login' 
						] 
					];
				} else {
					$menuItems [] = [ 
						'label' => 'Logout (' . Leaps::$app->user->identity->username . ')',
						'url' => [ 
							'/site/logout' 
						],
						'linkOptions' => [ 
							'data-method' => 'post' 
						] 
					];
				}
				echo Nav::widget ( [ 
					'options' => [ 
						'class' => 'navbar-nav navbar-right' 
					],
					'items' => $menuItems 
				] );
				NavBar::end ();
				?>

    <div class="container">
        <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?= Alert::widget()?>
        <?= $content?>
    </div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

			<p class="pull-right"><?= Leaps::powered() ?></p>
		</div>
	</footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
