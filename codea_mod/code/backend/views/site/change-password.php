<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Change Password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-changepassword">

    <?php
    $form = ActiveForm::begin([
                'id' => 'changepassword-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">
                        {input}</div>\n<div class=\"col-lg-5\">
                        {error}</div>",
                    'labelOptions' => ['class' => 'col-lg-2 control-label'],
                ],
    ]);
    ?>
    <?= $form->field($model, 'oldpass', ['inputOptions' => ['placeholder' => 'Old Password']])->passwordInput() ?>

    <?= $form->field($model, 'newpass', ['inputOptions' => ['placeholder' => 'New Password']])->passwordInput() ?>

    <?= $form->field($model, 'repeatnewpass', ['inputOptions' => ['placeholder' => 'Repeat New Password']])->passwordInput() ?>

    <div class="form-group">
        <div class="col-lg-2"></div>
        <div class="col-lg-3">
            <?= Html::submitButton('Update Profile', ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-5 pull-left">
            
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>