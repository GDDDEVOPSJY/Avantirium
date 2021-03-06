<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Banner'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?=
    Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
            'method' => 'post',
        ],
    ])
    ?>
  </p>

  <?=
  DetailView::widget([
      'model' => $model,
      'attributes' => [
          'heading',
          'text1',
          'text2',
          'text3',
          [
              'attribute' => 'banner',
              'value' => ($model->banner) ? Html::img(
                      Yii::$app->params['frontEndBaseUrl'].'uploads/aboutus/' . $model->banner, ['class' => 'img-responsive', 'width' => 300]
                  ) : '',
              'format' => 'raw'
          ],                   
          
      ],
  ])
  ?>

</div>
