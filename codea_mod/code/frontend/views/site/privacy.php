<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Privacy Policy';
//$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="page-path-box-wrap">
      <div class="container">
          <h1 class="page-title"><span><?= $model->heading ?></span></h1>        
      </div>
    </div>
  </div>
 <section class="pt-5 pb-5">
	<div class="container">    
        <?= $model->text1 ?>
      </div>
  </section>