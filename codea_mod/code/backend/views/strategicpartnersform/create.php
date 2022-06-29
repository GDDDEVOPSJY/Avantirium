<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Careers */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Strategic Partners Form', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usedcars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
