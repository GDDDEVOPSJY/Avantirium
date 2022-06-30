<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inner-banner" style="background:url(<?= Yii::$app->homeUrl ?>images/aboutus-banner.jpg) no-repeat center center; height:264px;">
    <div class="resp-image"><img src="<?= Yii::$app->homeUrl ?>images/faq_banner.jpg" alt="Aboutus" /></div>
    <div class="page-path-box-wrap">
      <div class="container">
        <h1 class="page-title"><span><?= Html::encode($this->title) ?></span></h1>
      </div>
    </div>
  </div>
<div class="container"><div class="page-path-bx"> <a class="home-icon" title="Home" href="<?= Yii::$app->homeUrl ?>"><i class="fa fa-home" aria-hidden="true"></i></a><a class="page-lnk" title="FAQ" href="#"><?= Html::encode($this->title) ?></a> </div></div>
<div class="content-main-area">
    <div class="about-top-content-bx">
        <div class="container">
            <div class="col-sm-12">
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please choose your new password:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
    </div>
</div>
    </div>