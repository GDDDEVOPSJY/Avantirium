<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'role',
            'name',
            //'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
             'email:email',             
             'primary_phone',
            // 'secondary_phone',
            // 'passport',
            // 'address:ntext',
            [
                 'attribute' => 'status',
                 'value' => function($data){
                        return $data->getStatusText();
                 },
                 'format' => 'raw',
                 'filter' => common\components\StatusBehavior::getStatusOptions(),
             ],
            'created_at:date',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view},{update}'],
        ],
    ]); ?>
</div>