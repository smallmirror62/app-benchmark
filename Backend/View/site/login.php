<?php

/* @var $this Leaps\Web\View */
/* @var $form Leaps\SmartAdmin\ActiveForm */
/* @var $model \Bommon\Models\LoginForm */
use Leaps\Helper\Html;
use Leaps\SmartAdmin\ActiveForm;
use Leaps\SmartAdmin\Asset;

//Asset::register ( $this );
$this->title = '登陆';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= \Leaps\SmartAdmin\Jarvis::widget(['headerOptions'=>['class'=>'ddd']]); ?>

















<div class="site-login">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to login:</p>

	<div class="row">
		<div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>


<?= $form->field($model, 'username')->icon('fa-user')->tooltip('lalala'); ?>

                <?= $form->field($model, 'password')->passwordInput()?>

                <div style="color: #999; margin: 1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

			<div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
	</div>
</div>
