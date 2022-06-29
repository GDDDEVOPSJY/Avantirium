<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
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
                
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out your email. A link to reset password will be sent there.</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
    </div>
</div>
    </div>