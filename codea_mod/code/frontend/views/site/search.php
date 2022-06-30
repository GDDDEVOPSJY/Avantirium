<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = '';//echo "<pre>"; exit;
//$this->params['breadcrumbs'][] = $this->title;
?>

  <section class="path-link">
            <div class="container">
            <div class="row">
            	
                <div class="col-12">
                	<a href="./">Home</a> / Search</a>
                </div>
                
            </div>
            </div>
            </section>
           <section class="inner-head mt-5 mb-4">
            <div class="container">
            <div class="row">
            	
                <div class="col-md-12">	

                    <h1 class="small">Search</h1>
                     <label class="align-L" style="width: 100%;" > Enter your keywords </label>  
				<div class="row mrg25-B R-mrg20-B">
						<form method="get" action="<?=\yii\helpers\Url::to(['/site/search']); ?>" accept-charset="utf-8" id="search-block-form" class="rec-form">
									<div class="col-sm-6 R-mrg20-B">
										<div class="field-bx">
											<div class="form-group field-contactform-name">                                    
												<input id="contactform-name" class="textbox-typ2" name="q" value="<?= (isset($_GET['q']))?$_GET['q']:'' ?>" placeholder="Search" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="contact-send-btn align-L">
												<button type="submit" class="btn btn-dark" >Search</button>
											</div>
									</div>
							</form>
				</div>
					  <div class="clear"></div>
					  
					</div>
			
			
			   </div>
                
            </div>
            </div>
            </section>
			
			
			
     <section class="mb-5">
            <div class="container">
            
                <div class="row rec-spec-item mb-5">
                  <div class="clear"></div>
                    
                    <div class="col-8">
					<?php if(empty($results) && empty($results1)  && empty($results_series) && empty($results_accessories) && empty($results_hardware)){ ?>
					  <h2 class="align-L" style="width: 100%;" >There are no results that match your search</h2>
					  <ul class="search-page search-results node-results">
				
						   <li class="search-result">                
							<div class="align-L" >
								<p >Check if your spelling is correct.</p>
							</div>
							</li>
					  </ul>
					  <?php } else { ?>
					  
					<!--  <h2 class="align-L" style="width: 100%;" >Search results &nbsp;found&nbsp;<?//= count($results)+count($results1) ?></h2>-->
					  
					  <ul class="search-page search-results node-results">
						  <?php if(!empty($results)){ foreach($results as $r){ ?>
						   <li class="search-result">
							<h3 class="align-L" >                    
								<a href="<?= Url::to(['/style/view/','id'=>$r->id]); ?>"><?= $r->name; ?></a>
							</h3>
							<div class="align-L" >
								<p > <?php if(strlen($r->description)>230){ echo substr(str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description),0, 230); } else{ echo str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description); } ?> For more info ...</p>
							</div>
							</li>
						  <?php } } ?>
						  <?php if(!empty($results1)){ foreach($results1 as $r){ ?>
						   <li class="search-result">
							<h3 class="align-L" >                    
								<a href="<?= Url::to(['/material/view/','id'=>$r->id]); ?>"><?= $r->name; ?></a>
							</h3>
							<div class="align-L" >
								<p > <?php if(strlen($r->description)>230){ echo substr(str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description),0, 230); } else{ str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description); } ?> For more info ...</p>
							</div>
							</li>
						  <?php } } ?>
						  
						   <?php if(!empty($results_series)){ foreach($results_series as $r){ ?>
						   <li class="search-result">
							<h3 class="align-L" >                    
								<a href="<?= Url::to(['/series/view/','id'=>$r->id]); ?>"><?= $r->name; ?></a>
							</h3>
							<div class="align-L" >
								<p > <?php if(strlen($r->description)>230){ echo substr(str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description),0, 230); } else{ echo str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description); } ?> For more info ...</p>
							</div>
							</li>
						  <?php } } ?>
						  
						   <?php if(!empty($results_accessories)){ foreach($results_accessories as $r){ ?>
						   <li class="search-result">
							<h3 class="align-L" >                    
								<a href="<?= Url::to(['/accessories']); ?>"><?= $r->name; ?></a>
							</h3>
							<div class="align-L" >
								<p > <?php if(strlen($r->description)>230){ echo substr(str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description),0, 230); } else{ echo str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description); } ?> For more info ...</p>
							</div>
							</li>
						  <?php } } ?>
						  
						   <?php if(!empty($results_hardware)){ foreach($results_hardware as $r){ ?>
						   <li class="search-result">
							<h3 class="align-L" >                    
								<a href="<?= Url::to(['/hardware']); ?>"><?= $r->name; ?></a>
							</h3>
							<div class="align-L" >
								<p > <?php if(strlen($r->description)>230){ echo substr(str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description),0, 230); } else{ echo str_replace($_GET['q'], "<strong>".$_GET['q']."</strong>", $r->description); } ?> For more info ...</p>
							</div>
							</li>
						  <?php } } ?>
					  </ul>
					  <?php } ?>
					
					</div>
					
			   </div>
		 </div>				
	  </section>
  