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
            <section class="mb-2">
            <div class="container-fluid">
            <div class="row series">	
            <?php    $series=  Series::find()->where(['status'=>1])->andWhere(['featured'=>1])->orderBy('sort asc')->all();   
           if(!empty($series)){ 
		    foreach($series as $s){ ?>
                <div class="col-md-3 col-sm-6 mt-2" style="background:url(<?php if($s->featured_image ){?><?= Yii::$app->params['frontEndBaseUrl'].'uploads/series/'.$s->featured_image ?><?php } else{ ?> <?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img500_400.jpg"<?php }?>) no-repeat center;">
                    <a href="<?= Url::to(['/series/view/','id'=>$s->id]); ?>">
                    	<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/series-link-icon.svg" alt="Toilet Partitions by Series" />
                        <h3 class="white text-uppercase text-center t-shadow"><?=$s->name?></h3>
                        <p class="white text-uppercase text-center bold"><?php if($s->dimension != NULL){?>(<?php }?> <?=$s->dimension ?><?php if($s->dimension != NULL){?> ) <?php }?></p>
                    </a>
                </div>
		   <?php } }?>

            </div>    
            </div>
            </section>
            
            <section class="pt-5 pb-5 mb-3">
            <div class="container mt-5 mb-5">
            <div class="row">
            	
                <div class="col-md-7 mt-5 shipping-content">
                	
                    <h1 class="mb-3">
                    	<?= $model->row1_title ?>
                    </h1>
                    
                   <?= $model->row1_content ?>
                    
                </div>
                
                <div class="col-md-5 mt-5">
                	<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/home/'.$model->row1_image ?>" alt="48Hrs. Express Shipping" class="round-img" />
                </div>
                
            </div>
            </div>
            </section>
            
            <section class="mt-3 mb-4">
            <div class="container-fluid">
            <div class="row">
            	
                <div class="col-md-6 p-0">
                	<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/home/'.$model->row2_image ?>" alt="Premium Privacy Line" class="img-fluid" />
                </div>
                
                <div class="col-md-6 shipping-content" style="background:rgba(0,0,0,0.075);">
                
                	<div class="dist-cont">
                    	<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/icon-01.svg" alt="Premier Privacy Line" class="icon-img" />
                        <h2 class="text-uppercase bold pt-4"><?= $model->row2_title ?></h2>
                        <br class="clearfix">
                        <?= $model->row2_content ?>
                    </div>
                
                </div>
                
                <div class="col-md-6 shipping-content">
                	
                    <div class="dist-cont">
                    	<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/icon-01.svg" alt="Diamond Line" class="icon-img" />
                        <h2 class="text-uppercase bold pt-4"><?= $model->row3_title ?></h2>
                        <br class="clearfix">
                       <?= $model->row3_content ?>
                    </div>
                    
                </div>
                
                <div class="col-md-6 p-0">
                	<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/home/'.$model->row3_image ?>" alt="Diamond Line" class="img-fluid" />
                </div>
                
                <div class="col-md-6 p-0">
                	<img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/home/'.$model->row4_image ?>" alt="Become A Distributor" class="img-fluid" />
                </div>
                
                <div class="col-md-6 shipping-content" style="background:rgba(0,0,0,0.075);">
                	
                    <div class="dist-cont">
                    	<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/icon-01.svg" alt="Become A Distributor" class="icon-img" />
                        <h2 class="text-uppercase bold pt-4"><?= $model->row4_title ?></h2>
                        <br class="clearfix">
                        <?= $model->row4_content ?>
                    </div>
                    
                </div>
                
            </div>    
            </div>
            </section>
            
            <section class="about">
            <div class="pt-5 pb-5">
            <div class="container mt-5 mb-5">
            <div class="row">
            	
                <div class="col-md-6 mt-5">
                	
                    <?= $model->row5_title ?>
                    
                    <p class="white">
						<?= $model->row5_content_left ?>
                    </p>
                    
                </div>
                
                <div class="col-md-6 mt-5 abt-list">
                	
                    <ul>
                    	<?= $model->row5_content_right ?>
                    </ul>
                    
                </div>
                
                <div class="col-md-12 mt-5 abt-link">
                	<a class="more-white" href="">Explore More</a>
                </div>
                
            </div>
            </div>
            </div>
            </section>
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