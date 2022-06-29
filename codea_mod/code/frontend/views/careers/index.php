<?php
use yii\web\View;
use yii\helpers\Url;
use common\widgets\Alert;
use common\models\Careers;
use common\models\CareersImages;

/* @var $this yii\web\View */

$this->title = 'Hardware and Fittings for Toilet and Bathroom Partitions | All American Metal Corp.';
/* @var $this yii\web\View */
?>
<?php //echo $content ?> 
         	
            <section class="path-link">
            <div class="container">
            <div class="row">
            	
                <div class="col-12">
                	<a href="./">Home</a> / <a href="#">Accessories</a>
                </div>
                
            </div>
            </div>
            </section>
            
            <section class="inner-head mt-5 mb-4">
            <div class="container">
            <div class="row">
            	
                <div class="col-md-12">
                	
                    <!--<span>Partition Hardware</span>-->
                    <h1 class="small">Accessories</h1>
                    <hr>
                    
                </div>
                
            </div>
            </div>
            </section>
		  <?php $Accessories=  Accessories::find()->where(['status' => 1])->all();   
		  if(!empty($Accessories)){ 
		  foreach($Accessories as $k){?>
            <div class="modal fade" id="accessories-cont<?php echo $k->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $k->name;?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-12">
                        
                        <div class="slider_container">
						  <?php $AccessoriesImages=  AccessoriesImages::find()->where(['accessories_id' => $k->id])->all();
								 if(!empty($AccessoriesImages)){ ?>
                        <div class="flexslider">
                        <ul class="slides">
                            <?php
								 if(!empty($AccessoriesImages)){ 
									   foreach($AccessoriesImages as $img){ ?>
                            <li>

                                <img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/accessories/'.$img->image?>" alt="" title=""/>
                            </li>
							
                          <?php }}?>
                        </ul>
                        </div>
						    <?php }?>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-12">
					 <?php echo $k->description;?>
                   
                    </div>
                    
                </div>
                </div>
            
            </div>
            </div>
            </div>
			 <?php }}?>
			
            
            <section class="mb-5">
            <div class="container">
            	
                <div class="row">
                <?php if(!empty($Accessories)){ 
		          foreach($Accessories as $k){?>
                    <div class="col-md-3 col-sm-6 col-12 pb-5 construction-det">
                        <a data-toggle="modal" data-target="#accessories-cont<?php echo $k->id?>">
					     <?php if($k->image){?>
                        <img src="<?= Yii::$app->params['frontEndBaseUrl'].'uploads/accessories/'.$k->image?>" alt="" />
						
						  <?php }else{ ?>
							 <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img354_217.jpg" class="" alt="" />
							 <?php }?>
				
                        <h6><?php echo $k->name; ?></h6>
                        </a>
                    </div>
                <?php }}?>   
                    
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