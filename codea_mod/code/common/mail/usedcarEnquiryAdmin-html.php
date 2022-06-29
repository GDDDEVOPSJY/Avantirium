<?php
use yii\helpers\Html;
use common\components\StatusBehavior;
/* @var $this yii\web\View */
/* @var $user common\models\User */


?>
<div class="password-reset">
    
    <p>Hi Admin,</p>

    <p>One User Car inquiry submitted by <?=$name?>.</p>
    <table>
        <tbody>
            <tr>
                <td>Selected Car :</td>
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
    
    <p>Customer Details</p>
    <table>
        <tbody>
            <tr>
                <td>Name :</td>
                <td><?= $model->name; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><?= $model->email; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Primary Phone :</td>
                <td><?= $model->primary_phone; ?></td>
                <td></td>
            </tr>            
            
            <tr>
                <td>Address :</td>
                <td><?= $model->address; ?></td>
                <td></td>
            </tr>           
        </tbody>    
    </table>  
    <p>Thank you,<br> <?= $sitename; ?> </p>
    
</div>
