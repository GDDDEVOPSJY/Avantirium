<?php

use yii\web\View;

?>
	<header>
    <section class="top-bar">
    <div class="container">
    
        <a href="<?= Yii::$app->params['frontEndHomeUrl'] ?>">Home</a>
        <a href="<?=\yii\helpers\Url::to(['site/about']); ?>">About Us</a>
        <a href="<?=\yii\helpers\Url::to(['site/contact']); ?>">Contact Us</a>
        <a href="https://partitiondesigner.com/loginAamco.aspx"><img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/login-icon.svg" alt="Distributor Login" /> Distributor Login</a>
        
    </div>
    </section>
       <?php echo $this->render('navigation'); ?>                        
