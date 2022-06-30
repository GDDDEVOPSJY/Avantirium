<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Careers */

$this->title = $model->company_name;
$this->params['breadcrumbs'][] = ['label' => 'Strategic Partners Form', 'url' => ['index']];
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
			'type:ntext', 
            'company_name:ntext',   
            'address:ntext',   
			//'complement:ntext',   
            'city:ntext',   
            'zip:ntext',   
            'state:ntext',   
			'website:ntext',   
			'full_name:ntext',   
			'position:ntext',   
            'phone_contact:ntext',   
			'mobile:ntext',   
            'skype:ntext',     
            'email:ntext',   
            'industry:ntext',   
		/*	'partnership_category:ntext',   
			'solution:ntext',   
			'main_goal:ntext',   
            'current_business:ntext',   
            'constitute:ntext',   
            'services:ntext',   
			'service_country:ntext',   
			'no_of_officers:ntext',   
			'no_of_customers:ntext',   
            'focus:ntext',  */ 
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
