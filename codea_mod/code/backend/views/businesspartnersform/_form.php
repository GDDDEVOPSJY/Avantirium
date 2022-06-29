<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\depdrop\DepDrop;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use vova07\imperavi\Widget;
use kartik\date\DatePicker;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model common\models\accessories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usedcars-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model);?>
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab-general"><?= Yii::t('app','General');?></a>
        </li>
            
    </ul>
    <div class="tab-content">
        <div id="tab-general" class="tab-pane active">

			  <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'phone_contact')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>			  
			  <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'current_business')->textInput(['maxlength' => true]) ?>
			  <?= $form->field($model, 'status')->dropDownList(\common\components\StatusBehavior::getStatusOptions(2), ['prompt' => 'Choose']) ?>
    
    </div>
  
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<?php $this->registerJsFile('https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0ukw5i7evo12hmqfmramgi6faa42llxq6cv0wyz6rnbhighe'); 
$this->registerJs('  
    
tinymce.init({ selector:"#usedcars-inclusions", plugins: [
        ["advlist autolink link lists charmap print preview hr anchor pagebreak spellchecker"],
        ["searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"],
        ["save table contextmenu directionality emoticons template paste"]
    ], });

    ' , View::POS_READY, 'usedcar');


?>
<script type="text/javascript">
	function myFunction(val)
	{ 
		$.ajax({
			url: '<?php echo Yii::$app->request->baseUrl. '/accessories/deletesingleimage' ?>',
		   type: 'post',
		   data: {id:val },
		   success: function (data) {
			document.getElementById('image'+val).style.display = "none";  

		   }

	  });
	}
</script>