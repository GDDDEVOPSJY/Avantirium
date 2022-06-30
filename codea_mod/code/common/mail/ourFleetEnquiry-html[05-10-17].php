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
                <td><?= (int)($model->cdw*$model->days); ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } if($model->driver!='0.00'){ ?>
            <tr>
                <td>Driver :</td>
                <td><?= (int)($model->driver*$model->days); ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } if($model->baby_seats!='0.00'){ ?>
            <tr>
                <td>Baby Car Seats :</td>
                <td><?= (int)($model->baby_seats*$model->days); ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
                <td>&nbsp;</td>
            </tr>
            <?php } if($model->gps!='0.00'){ ?>
             <tr>
                <td>GPS :</td>
                <td><?= (int)($model->gps*$model->days); ?> QAR For <?= $model->days; ?> Day<?php if($model->days>1) echo 's'; ?> </td>
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
    
    
    <div id="terms-popup" style="padding: 20px;background: #e0e0e0;" >
            <div class="hd-typ1 mrg20-B R-mrg15-B" style="font-size: 24px;" >TERMS AND CONDITIONS: </div>                 
                <p><strong><u>OUR PROPOSED RATES ARE INCLUSIVE OF:</u></strong></p>
<ul style="padding-left: 34px;">
<li style="list-style: inherit;" >Free routine periodic maintenance every 5000 km&rsquo;s at our Suzuki dealership service center.</li>
<li style="list-style: inherit;">Free replacement vehicle in the event of break down or God forbid an accident.</li>
<li style="list-style: inherit;">Comprehensive insurance with a deductible amount of Qr.1500/-, provided a police report is submitted with every accident.</li>
</ul>
<p>&nbsp;</p>
<p><strong><u>MILEAGE:</u></strong></p>
<p>35,500 KMS per year. An additional charge of Qr.50 per km is applicable for each and every additional kilometer above 25,000.</p>

<p><strong><u>LESSEE RESPONSIBILITY:</u></strong></p>
<p>Original LPO to be provided along with company credentials such as CR, Authorized signatories Contract in Arabic &amp; English to be signed by authorized signatory for long term lease. Lessee is also required to provide us with copies of Driving License &amp; I.D. card of the driver assigned to each vehicle during Contract signing.</p>

<p><strong><u>TRAFFIC VIOLATIONS:</u></strong></p>
<p>Traffic violations will be back charged to the lessee based on actual amounts and levies imposed by the traffic police department.</p>

<p><strong><u>MODE OF PAYMENT:</u></strong></p>
<p>Payment in advanced only.</p>

<p><strong><u>SECURITY DEPOSIT:</u></strong></p>
<p>Pre-Authorization of credit card is required. Pre-authorization continues till the end and additional 14 days after rental closing. (Qr.1500.00 for sedan vehicles &amp; Qr.2500.00 for Grand Vitara)</p>

<p><strong><u>DELIVERY PERIOD:</u></strong></p>
<p>In stock. However, we require 24 hours prior notice for paper work and other pre-delivery inspection and preparation.</p>
    
    </div>
    
</div>
