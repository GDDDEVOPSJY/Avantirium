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
	<?= $form->field($model, 'footer_content')->widget(Widget::className(), ['settings' => ['lang' => 'en','minHeight' => 200,'replaceDivs'=> false, 'paragraphize'=> false,'plugins' => ['fullscreen',]],]);?>
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


