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
            <div class="hd-typ1 mrg20-B R-mrg15-B" style="font-size: 24px;" >Rental Terms &amp;Conditions: </div>                 
                <ol>
                <li>The renter acknowledges receipt of the car in good condition and undertakes to return it in the same condition within the specific rental period. This agreement will be considered void &amp; company is not liable in the event the renter neglects, misuse or abuse the rented vehicle or makes any changes or addition thereto; the renter alone shall bear the cost of repair and restoration of the vehicle&amp; company reserves the right to terminate the agreement and recall the rented vehicle by any means it deems appropriate at its own discretion from the renter without any objection by renter.</li>
                <li>Rental value shall be calculated as specified on this agreement. Rental payment shall be made in cash or by credit cards, payment in personal Chequesis not acceptable. Entitlements of the company or renter shall be settled immediately upon the end of rental period.</li>
                <li>The renter shall notify the company of his / her desire to extend the agreement prior to expiry thereof.</li>
                <li>The renter shall bear fuel expenses during the entire rental period.</li>
                <li>Age of the driver shall not be less than (21) years. The driver must hold a valid driving license,the name of main driver and co-driver must be mentioned in the agreement. In case it is proven that the rented vehicle is driven by any unlicensed driver or a person not authorized at the time of opening the rental agreement or that the renter presented incorrect information at the time of renting the vehicle, the agreement shall be deemed as cancelled and the renter shall bear full responsibility for any loss or damage caused to the rented vehicle and the third party. Accordingly, the renter shall not benefit from the insurance policy in this case. In regards for establishments or companies, the rented vehicle must be driven only by the employees holding valid driver licenses and authorized by the renter under whose sponsorship the employee concerned works.In case of violation, the renter shall be fully responsible for any loss or damage incurred thereof. The rented vehicle shall not be used for transportation of passengers or goods against charges, and shall not be overloaded, or used for races, rallies or similar purposes.</li>
                <li>The company insures the vehicle under Comprehensive Insurance policy provided that the renter shall bear the mandatory excess amount mentioned on front pageas per the insurance policy.</li>
                <li>In case of accident, fire, theft or any case causing damages to the car, the renter must invariably notify the police or the competent authority immediately and obtain the Police Report and Repair Permission Certificate and notify the company within 24 hours. In case of negligence of renter to act accordingly, theagreement shall be deemed to be cancelled and the renter shall be held fully responsible for the damagesas a result for that, including the rental charges until the renter provide the company with the police report &amp; the repair permission certificate, and the company has the right not to provide a replacement vehicle in such case.</li>
                <li>The renter shall not benefit from the insurance and shall be considered fully responsible towards the company and third party, and shall bear solely all direct and indirect expenses resulting from accident, damages and theft in the following cases:
                <p>a) Damage or loss caused by negligence or intentionally caused to rented vehicle.</p>
                <p>b)Evidence that vehicle is driven under the influence of alcohol or drugs.</p>
                <p>c) Accidents, damages or theft that happens to the vehicle after the end of original rental agreement unless renewed in writing by company.</p>
                <p>d) Vehicle is not permitted to be driven off-roads or at sandy beaches.</p>
                <p>e) Driving the vehicle by a person underage as per agreement or by an unlicensed driver or not authorized as per the agreement.</p>
                <p>f) Vehicle has been stolen because of leaving the key in the car.</p>
                <p>g) In case of loss of key (QAR 500) will be charged for a normal key and (QAR 750) for a key with remote control.</p>
                <p>h) A minimum of (QAR 250) will be charged for each cigarette burn on the seat or upholstery, or any missing wheel cap or minor surface scratches or any other minor damages caused to the car.</p>
                </li>
                <li>The renter shall bear the civil and criminal liability for any violation or breach of regulations &amp; laws applicable in the State of Qatar. Also, renter shall bear the responsibility for payment of traffic violations committed by him / her during the rental period.</li>
                <li>If the renter fails to pay the due rental amounts to the company within 3 days from the due date, the company has the right to recall the vehicle.</li>
                <li>The renter shall bear full responsibility for leaving personal belongings inside the vehicle. The Company and its employees shall assume no liability whatsoever for any personal belonging to the renter left inside the vehicle.</li>
                <li>The company shall be responsible for maintenance of the rented vehicle. Renter shall be responsible for bringing the vehicle to the company to change oil every (5,000 km) or 6 months whichever comes first or as informed by the company for regular periodic maintenance. In case of violation of this condition, the renter alone shall be responsible for any technical or mechanical damages caused to the vehicle as a result of that.</li>
                <li>Any dispute arising between both parties shall be solved amicably, and in case of non-settlement, the dispute shall be referred to the competent authorities and Qatar Court concerned, in accordance with the applicable laws &amp;regulations in the state of Qatar.&nbsp;</li>
                </ol>
    
    </div>
    
</div>
