<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = Yii::t('app', 'Update {modelClass} ', [
        'modelClass' => 'Home',
    ]);

$this->params['breadcrumbs'][] = ['label' => 'Home page', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="news-update">

  <h1><?= Html::encode($this->title) ?></h1>

  <?=
  $this->render('_form', [
      'model' => $model,
      
  ])
  ?>

</div>
