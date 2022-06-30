<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Careers */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Certified Consultants Form', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usedcars-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
     <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab-general"><?= Yii::t('app','General');?></a>
        </li>     
    </ul>
    <div class="tab-content">
        <div id="tab-general" class="tab-pane active">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
			'id:ntext',   
			'full_name:ntext',   
			'position:ntext',   
            'phone_contact:ntext',   
			'mobile:ntext',   
            'skype:ntext',     
            'email:ntext',   
            'focus:ntext',   
            [
                'attribute' => 'status',
                'value' => $model->getStatusText(),
                'format' => 'raw',
            ],
        ],
    ]) ?>
    </div>
    </div>
</div>
