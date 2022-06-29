<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Accessories */

$this->title = 'Update';
$this->params['breadcrumbs'][] = ['label' => 'Careers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_position, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usedcars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
