<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>    
    <?= $form->field($model, 'role')->dropDownList(common\components\StatusBehavior::getRole()) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>    
    <?= $form->field($model, 'confirm_password')->passwordInput(['maxlength' => true]) ?>    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'primary_phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'secondary_phone')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'passport')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'status')->dropDownList(common\components\StatusBehavior::getStatusOptions()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
