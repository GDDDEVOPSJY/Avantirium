<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Leed';
//$this->params['breadcrumbs'][] = $this->title;
?>


     <section class="path-link">
            <div class="container">
            <div class="row">
            	
                <div class="col-12">
                	<a href="./">Home</a> / Resources / <a href="resources-leed.php">Leed</a>
                </div>
                
            </div>
            </div>
            </section>
            
            <section class="inner-head mt-5 mb-4">
            <div class="container">
            <div class="row">
            	
                <div class="col-md-12">
                	
                    <span>Download</span>
                    <h1 class="small"><?= $model->heading ?></h1>
                    <hr>
                    
                </div>
                
            </div>
            </div>
            </section>
            
            <section class="mb-5">
             <?= $model->text1 ?>
            </section>