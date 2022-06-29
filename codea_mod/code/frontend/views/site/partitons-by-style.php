<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
$this->title = 'About Us';
//$this->params['breadcrumbs'][] = $this->title;
?>
<section style="border-bottom:solid 5px rgba(0,0,0,0.2);">
	<div class="container-fluid p-0">
	<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/aboutus/'.$model->banner ?>" alt="" class="img-fluid" />
	</div>
	</section>
	
	<section class="pt-5 pb-5 abt">
	<div class="container">
	
		<div class="row rec-spec-item mb-5">
		
			<div class="col-md-6">
				<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/aboutus/'.$model->row1_image ?>" alt="Metal Toilet Partitions" />
			</div>
			
			<div class="col-md-6">
				
				<h3 class="mt-5"><?= $model->row1_label ?></h3>
				<h1 class="bold mb-4"><?= $model->row1_title ?></h1>
				<p>
					<?= $model->row1_content ?>
				</p>
				
			</div>
			
		</div>
		
		<div class="row rec-spec-item mb-5 pt-5">
		
			<div class="col-md-6 pt-5">
				
				<h3 class="mt-5"><?= $model->row2_label ?></h3>
				<h1 class="bold mb-4"><?= $model->row2_title ?></h1>
				<p>
					<?= $model->row2_content ?>
				</p>
				
			</div>
			
			<div class="col-md-6">
				<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/aboutus/'.$model->row2_image ?>" alt="Toilet Partitions" />
			</div>
			
		</div>
		
	</div>
	</section>
	
	<section class="pt-5 pb-5 abt1">
	<div class="container">
	<div class="row">
		
		<div class="col-md-12 text-center">
			<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/wheel-chair.svg" alt="" style="height:50px;" />
			<h1 class="small white mt-2 mb-4"><?= $model->row3_title ?></h1>
			<p class="white mb-4">
            <?= $model->row3_content ?></p>
		</div>
		
	</div>
	</div>
</section>

<?php

$this->registerJs("    
        if($(window).width() < 979){
            popupwidth ='90%';
	}
	else {
            popupwidth = '1000px';
	}
    $('.group1').colorbox({rel:'group1', width:popupwidth, inline:true, href:$(this).attr('href')});

", View::POS_END, 'about'); ?>