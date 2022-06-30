<?php
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use common\models\HomeBanner;
use kartik\select2\Select2;
use common\models\Models;
use common\models\Ourfleets;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
    $banner=  HomeBanner::find()->where(['status'=>1])->orderBy('sort asc')->all();    
    if(!empty($banner)){
?>
		   <section id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
		
			<div class="carousel-inner">
			 <?php $i = 0;
			 foreach($banner as $b){ ?>
			  <?php if($b->banner){?>
				<div class="carousel-item <?php if($i==0){?> active <?php } $i++;?>">
				    <?php if($b->banner){?>
					<img src="<?=Yii::$app->params['frontEndBaseUrl'].'uploads/banner/'.$b->banner ?>" class="d-block w-100" alt="Experience you can rely on">
					<?php }else{ ?>
					<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img2000_900.jpg" class="d-block w-100" alt="Experience you can rely on">
					<?php }?>
					<div class="carousel-caption">
						<h2 class="text-uppercase white"><?=$b->left_text?></h2>
						<h1 class="text-uppercase white"><?=$b->left_sub_text?></h1>
						<a href="">CONTACT US FOR DETAILS</a>
					</div>
				</div>
			  <?php }} ?>
			</div>
			
			<a class="carousel-control-prev d-none" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next d-none" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		
		</section>
			
			
<?php } ?>			

        
