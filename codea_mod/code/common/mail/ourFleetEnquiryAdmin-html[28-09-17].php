<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */


?>
<div class="password-reset">
    
    <p>Hi Admin,</p>

    <p>One our fleet enquiry submitted by <?=$name?>.</p>
    <table>
        <tbody>
            <tr>
                <td>Selected Car :</td>
                <td><?= $model_name; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Pickup and Return Location :</td>
                <td><?= $model->location; ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Pick-up Date and Time :</td>
                <td> <?= $pick_up; ?></td>
                <td> </td>
            </tr>
            <tr>
                <td>Return Date and Time :</td>
                <td><?= $return; ?></td>
                <td> </td>
            </tr>
            <tr>
                <td>Amount :</td>
                <td><?= $model->car_amount; ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?></td>
                <td> </td> 
            </tr>
            <?php if($model->cdw!='0.00' || $model->driver!='0.00' || $model->baby_seats!='0.00' || $model->gps!='0.00'){ ?>
            <tr>
                <td colspan="3"><h5 style="text-align: center;">Choosen Extras</h5></td>
            </tr>
            <?php  if($model->cdw!='0.00'){ ?>
            <tr>
                <td>CDW :</td>
                <td><?= $model->cdw; ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } if($model->driver!='0.00'){ ?>
            <tr>
                <td>Driver :</td>
                <td><?= $model->driver; ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } if($model->baby_seats!='0.00'){ ?>
            <tr>
                <td>Baby Car Seats :</td>
                <td><?= $model->baby_seats; ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } if($model->gps!='0.00'){ ?>
             <tr>
                <td>GPS :</td>
                <td><?= $model->gps; ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } ?>
            <tr>
                <td>Total :</td>
                <td><b><?= $model->total; ?> QAR</b></td>
                <td>&nbsp;</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <p>Thank you,<br> <?= $sitename; ?> </p>
    
</div>
