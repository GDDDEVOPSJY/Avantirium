<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\widgets\Alert;
$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section style="border-bottom:solid 5px rgba(0,0,0,0.2);">
 <?php if($contact->banner){?>
<div class="container-fluid p-0">
<img src="<?=Yii::$app->params['frontEndBaseUrl'].'uploads/contactus/'.$contact->banner ?>" alt="" class="img-fluid" />
</div>
<?php }?>
</section>

<section class="pt-5 pb-5 abt">
<div class="container">
<div class="row mb-5 mt-5">

	<div class="col-md-6 pt-5">
		
		<div class="mt-2">
		
			<h1 class="small"><?=$contact->title ?></h1>
			<p>
				<?=$contact->content ?>
			</p>
			
			<p>
				<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/address.svg" alt="" style="height:22px;" /> &nbsp; <?=$contact->address ?>
			</p>
			
			<p>
				<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/telephone.svg" alt="" style="height:22px;" /> &nbsp; <?=$contact->phone ?>
			</p>
			
			<p>
				<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/fax.svg" alt="" style="height:22px;" /> &nbsp; <?=$contact->fax ?>
			</p>
			
			<p>
				<img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/mail.svg" alt="" style="height:22px;" /> &nbsp; <?=$contact->email ?>
			</p>
			
			
		</div>
		
	</div>
	
	<div class="col-md-6">
		
		<iframe src="<?=$contact->map_iframe_src ?>" style="border:none; width:100%; height:400px;"></iframe>
		
	</div>
	
</div>
</div>
</section>

<section class="pt-5 pb-5 cont">
	<div class="container">
		<?php $form = ActiveForm::begin(['id' => 'contact-form','enableClientValidation' => false]); ?>
			<div class="row">
				
				<div class="col-md-6">
					<?= $form->field($model, 'name')->textInput(['placeholder'=>'Name', 'class' => 'form-control mb-4'])->label(false) ?>
					<?= $form->field($model, 'email')->textInput(['placeholder'=>'E-Mail', 'class' => 'form-control mb-4'])->label(false) ?>
					<?= $form->field($model, 'phone')->textInput(['placeholder'=>'Phone', 'class' => 'form-control mb-4'])->label(false) ?>				
				</div>
				
				<div class="col-md-6">
					<?= $form->field($model, 'address')->textInput(['placeholder'=>'Address', 'class' => 'form-control mb-4'])->label(false) ?>
					<?= $form->field($model, 'city')->textInput(['placeholder'=>'City, State', 'class' => 'form-control mb-4'])->label(false) ?>
					<?= $form->field($model, 'zip')->textInput(['placeholder'=>'Zip', 'class' => 'form-control mb-4'])->label(false) ?>					
				</div>
				
				<div class="col-md-12">
					<?= $form->field($model, 'message')->textArea(['placeholder'=>'', 'class' => 'form-control mb-4'])->label(false) ?>	
					
                    <div class="contact-send-btn align-C R-align-C">
                        <?= Html::submitButton('SUBMIT', ['class' => 'btn btn-danger', 'name' => 'contact-button','style' => 'padding:5px 15px']) ?>
                        <!--<button class="send-btn">Send Message</button>-->
                    </div>      
					<!--<button type="button" class="btn btn-danger" >SUBMIT</button>-->
				</div>
				
			</div>
		<?php ActiveForm::end(); ?>		                                              
	</div>
</section>
