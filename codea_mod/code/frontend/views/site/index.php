<?php
use yii\web\View;
use common\widgets\Alert;
use common\models\Series;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Hardware and Fittings for Toilet and Bathroom Partitions | All American Metal Corp.';
?>
<?php echo $this->render('/site/midbar'); ?>

<?php //echo $content ?> 
         
<?php $this->registerJs(' 
    
  /*  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));*/

'); ?>

<?php $this->registerJsFile('@web/js/bootstrap.min.js',['depends' => [\frontend\assets\AppAsset::classname()]]); ?>