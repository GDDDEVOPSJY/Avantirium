<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */


?>
<div class="password-reset">
    
    <p>Hi Admin,</p>

    <p>One our fleet Popup enquiry submitted by <?=$name?>.</p>
    <table>
        <tbody>
            <tr>
                <td>Name :</td>
                <td><?= $name; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><?= $email; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Primary Phone number :</td>
                <td> <?= $primary_phone; ?></td>
                <td> </td>
            </tr>
            <tr>
                <td>Secondary Phone number :</td>
                <td><?= $secondary_phone; ?></td>
                <td> </td>
            </tr>
            <tr>
                <td>Address :</td>
                <td><?= $address; ?></td>
                <td> </td> 
            </tr>           
        </tbody>
    </table>
    <br>
    <p>Thank you,<br> <?= $sitename; ?> </p>
    
</div>
