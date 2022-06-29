<?php
use yii\helpers\Html;

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
        </tbody>    
    </table>    

    <p>Thank you,<br> <?= $sitename; ?> </p>
    
</div>
