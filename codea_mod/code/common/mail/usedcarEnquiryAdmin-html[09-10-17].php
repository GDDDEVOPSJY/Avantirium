<?php
use yii\helpers\Html;

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
