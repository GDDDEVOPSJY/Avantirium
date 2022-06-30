<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;
use common\models\Style;
use common\models\Material;
use common\models\Series;

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>     <section class="path-link">
            <div class="container">
            <div class="row">
            	
                <div class="col-12">
                	<a href="./">Home</a> / <a href="toilet-partitions-home.php">Toilet Partitions</a>
                </div>
                
            </div>
            </div>
            </section>
            
            <section class="inner-head mt-5 mb-4">
            <div class="container">
            <div class="row">
            	
                <div class="col-md-12">
                	
                    <h1 class="small">Toilet Partitions</h1>
                    <hr>
                    
                </div>
                
            </div>
            </div>
            </section>
            
            <section class="pb-5">
            <div class="container">
            
                <div class="row rec-spec-item">
                <div class="col-12 text-justify">
                    <h2 class="mb-5 text-uppercase" style="font-size:16px;">Partitions by Style</h2>
                </div>
                </div>
                
                <div class="row partition-style mb-5">
				<?php $styles =  Style::find()->where(['status'=>1])->orderBy('sort asc')->all();  ?>
				<?php if(!empty($styles)){ 
				foreach($styles as $b){ ?>
                    <div class="col-md-2 col-sm-3 col-6 text-center">
                        
                        <a href="<?= Url::to(['/style/view/','id'=>$b->id]); ?>">
						 <?php if($b->image){?>
                            <img src="<?=Yii::$app->params['frontEndBaseUrl'].'uploads/style/'.$b->image ?>" class="img-fluid border" alt="<?php echo $b->name; ?>" />
							<?php }else{ ?>
							 <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img532_619.jpg" class="d-block w-100" alt="<?php echo $b->name; ?>" />
							 <?php }?>
                            <p>
                               <?=$b->name?>
                            </p>
                        </a>
                        
                    </div>
                <?php }} ?>       
                   
                    
                </div>
                
                <div class="row rec-spec-item">
                <div class="col-12 text-justify">
                    <h2 class="mb-5 text-uppercase" style="font-size:16px;">Partitions by Materials</h2>
                </div>
                </div>
                
                <div class="row partition-style mb-5">
                    <?php $material =  Material::find()->where(['status'=>1])->orderBy('sort asc')->all();  ?>
					<?php if(!empty($material)){ 
					foreach($material as $m){ ?>
                    <div class="col-md-2 col-sm-3 col-6 text-center">
                        
                        <a href="<?= Url::to(['/material/view/','id'=>$m->id]); ?>">
						    <?php if($m->image){?> 
                            <img src="<?=Yii::$app->params['frontEndBaseUrl'].'uploads/material/'.$m->image ?>" class="img-fluid border" alt="Headrail Braced Toilet Partition" />
							<?php }else{ ?>
							 <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img400_309.jpg" class="d-block w-100" alt="<?php echo $b->name; ?>" />
							 <?php }?>
                            <p>
                                 <?=$m->name?>
                            </p>
                        </a>
                        
                    </div>
                    <?php } } ?>    
                   
                    
                </div>
                
                <div class="row rec-spec-item">
                <div class="col-12 text-justify">
                    <h2 class="mb-5 text-uppercase" style="font-size:16px;">Partitions by Series</h2>
                </div>
                </div>
                
                <div class="row partition-style mb-5">
					<?php $series =  Series::find()->where(['status'=>1])->orderBy('sort asc')->all();  ?>
					<?php if(!empty($series)){ 
					foreach($series as $s){ ?>
                    <div class="col-md-2 col-sm-3 col-6 text-center">
                        
                        <a href=<?= Url::to(['/series/view/','id'=>$s->id]); ?>">
						<?php if($s->menu_image){?> 
                            <img src="<?=Yii::$app->params['frontEndBaseUrl'].'uploads/series/'.$s->menu_image ?>"  class="img-fluid border" alt="   <?=$s->name?>" />
							<?php }else{ ?>
							 <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img400_309.jpg" class="d-block w-100" alt="<?php echo $s->name; ?>" />
							 <?php }?>
                            <p>
                                 <?=$s->name?>
                            </p>
                        </a>
                        
                    </div>
                    	<?php }} ?>
                
                    
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