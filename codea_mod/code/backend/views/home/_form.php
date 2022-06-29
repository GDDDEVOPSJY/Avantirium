<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use vova07\imperavi\Widget;
/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	<?= $form->field($model, 'row1_title')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
	 <?php if ($model->row1_image) { ?>
      <div class="row">
        <div class="col-sm-2">
          <p><?= Html::img(Yii::$app->params['frontEndBaseUrl'].'uploads/aboutus/' . $model->row1_image, ['class' => 'img-responsive']); ?></p>
        </div>
        <div class="clearfix"></div>
      </div>
    <?php } ?> 
	<?= $form->field($model, 'imageFile1')->fileInput()->hint('1000*700 Preffered'); ?>
	<?= $form->field($model, 'row1_content')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
	<?= $form->field($model, 'row2_title')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
	<?php if ($model->row2_image) { ?>
      <div class="row">
        <div class="col-sm-2">
          <p><?= Html::img(Yii::$app->params['frontEndBaseUrl'].'uploads/aboutus/' . $model->row2_image, ['class' => 'img-responsive']); ?></p>
        </div>
        <div class="clearfix"></div>
      </div>
    <?php } ?>
	<?= $form->field($model, 'imageFile2')->fileInput()->hint('1000*700 Preffered'); ?>  
	<?= $form->field($model, 'row2_content')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
	<?= $form->field($model, 'row3_title')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
     <?php if ($model->row3_image) { ?>
      <div class="row">
        <div class="col-sm-2">
          <p><?= Html::img(Yii::$app->params['frontEndBaseUrl'].'uploads/home/' . $model->row3_image, ['class' => 'img-responsive']); ?></p>
        </div>
        <div class="clearfix"></div>
      </div>
    <?php } ?>
	<?= $form->field($model, 'imageFile3')->fileInput()->hint('1000*700 Preffered'); ?>
	<?= $form->field($model, 'row3_content')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>  	
	<?= $form->field($model, 'row4_title')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
     <?php if ($model->row4_image) { ?>
      <div class="row">
        <div class="col-sm-2">
          <p><?= Html::img(Yii::$app->params['frontEndBaseUrl'].'uploads/home/' . $model->row4_image, ['class' => 'img-responsive']); ?></p>
        </div>
        <div class="clearfix"></div>
      </div>
    <?php } ?> 
	<?= $form->field($model, 'imageFile4')->fileInput()->hint('1000*700 Preffered'); ?>  
	<?= $form->field($model, 'row4_content')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
	<?= $form->field($model, 'row5_title')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
     <?php if ($model->row5_image) { ?>
      <div class="row">
        <div class="col-sm-2">
          <p><?= Html::img(Yii::$app->params['frontEndBaseUrl'].'uploads/home/' . $model->row5_image, ['class' => 'img-responsive']); ?></p>
        </div>
        <div class="clearfix"></div>
      </div>
    <?php } ?> 
	<?= $form->field($model, 'imageFile5')->fileInput()->hint('1000*700 Preffered'); ?> 
	<?= $form->field($model, 'row5_content_left')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>	
	<?= $form->field($model, 'row5_content_right')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  <?php ActiveForm::end(); ?>
</div>

<?php //$this->registerJsFile('https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0ukw5i7evo12hmqfmramgi6faa42llxq6cv0wyz6rnbhighe'); 
/*$this->registerJs('  
    
  tinymce.init({ selector:"textarea", plugins: [
        ["advlist autolink link lists charmap print preview hr anchor pagebreak spellchecker"],
        ["searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"],
        ["save table contextmenu directionality emoticons template paste"]
    ], });

    ' , View::POS_READY, 'banner');
*/

?>


