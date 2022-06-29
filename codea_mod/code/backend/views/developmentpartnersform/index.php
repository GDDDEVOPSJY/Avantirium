<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AccessoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Development Partners Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usedcars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //   [
            //     'attribute' => 'name',
            //     'value' => function($data){
             //           return $data->name;
             //    },                 
            //]
          // ,
		  'company_name',
           'address',
			
           // 'reg_no',            
           // [
            //     'attribute' => 'date',
           //      'value' => function($data){
            //            return date('Y',strtotime($data->date));
           //      },                 
           //  ],*/
           // 'heading',
            //'image',
            // 'description:ntext',
            // 'doors',
            // 'bluetooth',
            // 'passengers',
            // 'automatic',
            // 'price',
            // 'km',
            // 'date',
             [
                 'attribute' => 'status',
                 'value' => function($data){
                        return $data->getStatusText();
                 },
                 'format' => 'raw',
                 'filter' => common\components\StatusBehavior::getStatusOptions(),
             ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
