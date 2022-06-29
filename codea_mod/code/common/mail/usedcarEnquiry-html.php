<?php
use yii\helpers\Html;
use common\components\StatusBehavior;
/* @var $this yii\web\View */
/* @var $user common\models\User */


?>
<div class="password-reset">
    
    <p>Dear <?= Html::encode($name) ?>,</p>

    <p>Thank you for your inquiry, we will contact you shortly.</p>
    <table>
        <tbody>
            <tr>
                <td>Your Car :</td>
                <td><?= $model_name; ?></td>
                <td></td>
            </tr>  
            <tr>
                <td>Kilometers :</td>
                <td><?= $model->usedcars->km; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Price :</td>
                <td><?= 'QAR '.StatusBehavior::numberformat($model->usedcars->price); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Year Model :</td>
                <td><?= date('Y',strtotime($model->usedcars->date)); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Car plate no :</td>
                <td><?= $model->usedcars->reg_no; ?></td>
                <td></td>
            </tr>
        </tbody>    
    </table>    

    <p>Thank you,<br> <?= $sitename; ?> </p>
    
</div>
