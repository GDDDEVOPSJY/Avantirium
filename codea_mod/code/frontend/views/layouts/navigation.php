<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\helpers\HtmlPurifier;
use common\models\Style;
use common\models\Material;
use common\models\Series;
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
    
        <a class="navbar-brand" href="<?= Yii::$app->params['frontEndHomeUrl'] ?>"><img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/logo.svg" alt="All American Metal Corp." /></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="closeSubMenu()">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
            <ul class="navbar-nav mr-auto">
            
                <li class="nav-item"><a class="nav-link" onclick="openPartMenu()">Toilet Partitions</a></li>
                <li class="nav-item"><a href="<?=\yii\helpers\Url::to(['accessories/']); ?>" class="nav-link">Accessories</a></li>
                <li class="nav-item"><a class="nav-link" onclick="openHardMenu()">Hardware</a></li>
                <li class="nav-item"><a class="nav-link" onclick="openRecMenu()">Resources</a></li>
                
            </ul>
           <form class="form-inline my-2 my-lg-0" method="get" action="<?=\yii\helpers\Url::to(['/site/search']); ?>" accept-charset="utf-8" id="search-block-form">

				<input placeholder="Search" class="form-control" name="q" type="text">
               <button class="btn" type="submit"><img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/svg/search-icon.svg" alt="Search" /></button>
			</form>	
            
        </div>
        
    </div>    
    </nav>
    
</header>

<div id="partitions" class="submenu animate-top">
<div class="row">
    
    <div class="col-md-6 col-sm-12 pb-4">
        
        <div class="submenu-head">Partitions by Style</div>
        <div class="row partition-style">
		<?php $styles =  Style::find()->where(['status'=>1])->orderBy('sort asc')->all();  ?>
        <?php if(!empty($styles)){ 
		foreach($styles as $b){ ?>
            <div class="col-md-3 col-sm-3 col-6 text-center">
                
                <a href="<?= Url::to(['/style/view/','id'=>$b->id]); ?>">
				    <?php if($b->image){?>
                    <img src="<?=Yii::$app->params['frontEndBaseUrl'].'uploads/style/'.$b->image ?>" alt="<?php echo $b->name ?>" />
					 <?php }else{ ?>
					 <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/img/img532_619.jpg" class="d-block w-100" alt="<?php echo $b->name; ?>" />
					 <?php }?>
                    <p>
                        <?=$b->name?>
                    </p>
                </a>
                
            </div>
		 <?php }} ?>                   
        </div>
        
    </div>
    
    <div class="col-md-3 col-sm-6  pb-4">
        
        <div class="submenu-head">Partitions by Material</div>
        
        <div class="submenu-item">
        <?php $material =  Material::find()->where(['status'=>1])->orderBy('sort asc')->all();  ?>
        <?php if(!empty($material)){ 
		foreach($material as $m){ ?>
            <a href="<?= Url::to(['/material/view/','id'=>$m->id]); ?>"><?= $m->name?></a>
	    <?php } } ?>              
        </div>
        
    </div>
    
    <div class="col-md-3 col-sm-6  pb-4">
        
        <div class="submenu-head">Partitions by Series</div>
        
        <div class="submenu-item">
        <?php $series =  Series::find()->where(['status'=>1])->orderBy('sort asc')->all();  ?>
        <?php if(!empty($series)){ 
		foreach($series as $s){ ?>
		 <a href="<?= Url::to(['/series/view/','id'=>$s->id]); ?>"><?= $s->name?></a>
		<?php }} ?>
            
        </div>
        
    </div>
    
</div>
</div>
<div id="menu-overlay1" class="topbar-overlay overlay-animate-opacity" onclick="closeSubMenu()"></div>

<div id="accessories" class="submenu animate-top">
<div class="row">
    
    <div class="col">
        
        <a href="<?= Url::to(['specification/']); ?>">
            <div></div>
            <p>
                Specification
            </p>
        </a>
        
    </div>
    
    <div class="col">
        
        <a href="<?= Url::to(['installation/']); ?>">
            <div></div>
            <p>
                Installation Instruction
            </p>
        </a>
        
    </div>
    
    <div class="col">
        
        <a href="<?= Url::to(['warranty/']); ?>">
            <div></div>
            <p>
                Warranty/Care
            </p>
        </a>
        
    </div>
    
    <div class="col">
        
        <a href="<?= Url::to(['site/leed/']); ?>">
            <div></div>
            <p>
                Leed
            </p>
        </a>
        
    </div>
    
    <div class="col">
        
        <a href="<?= Url::to(['catalog/']); ?>">
            <div></div>
            <p>
                Catalog
            </p>
        </a>
        
    </div>
    
    
</div>
</div>
<div id="menu-overlay2" class="topbar-overlay overlay-animate-opacity" onclick="closeSubMenu()"></div>

<div id="hardware" class="submenu animate-top">
<div class="row">
    
    <div class="col-md-3 col-6">
        
        <a href="<?= Url::to(['/hardware/view/','id'=>1]); ?>">
            <div></div>
            <p>
                POWDER COATED &amp; STAINLESS STEEL<br>
                PARTITION HARDWARE
            </p>
        </a>
        
    </div>
    
    <div class="col-md-3 col-6">
        
        <a href="<?= Url::to(['/hardware/view/','id'=>4]); ?>">
            <div></div>
            <p>
                PLASTIC LAMINATE<br>
                PARTITION HARDWARE
            </p>
        </a>
        
    </div>
    
    <div class="col-md-3 col-6">
        
        <a href="<?= Url::to(['/hardware/view/','id'=>5]); ?>">
            <div></div>
            <p>
                PHENOLIC CORE<br>
                PARTITION HARDWARE
            </p>
        </a>
        
    </div>
    
    <div class="col-md-3 col-6">
        
        <a href="<?= Url::to(['/hardware/view/','id'=>3]); ?>">
            <div></div>
            <p>
                SOLID PLASTIC<br>
                PARTITION HARDWARE
            </p>
        </a>
        
    </div>

</div>
</div>
<div id="menu-overlay3" class="topbar-overlay overlay-animate-opacity" onclick="closeSubMenu()"></div>

<div id="resources" class="submenu animate-top">
<div class="row">
    
    <div class="col-md col-sm-4 col-6 rec">
        
        <a href="<?= Url::to(['specification/']); ?>">
            <div></div>
            <p>
                Specification
            </p>
        </a>
        
    </div>
    
    <div class="col-md col-sm-4 col-6 rec">
        
        <a href="<?= Url::to(['installation/']); ?>">
            <div></div>
            <p>
                Installation Instruction
            </p>
        </a>
        
    </div>
    
    <div class="col-md col-sm-4 col-6 rec">
        
        <a href="<?= Url::to(['warranty/']); ?>">
            <div></div>
            <p>
                Warranty/Care
            </p>
        </a>
        
    </div>
    
    <div class="col-md col-sm-4 col-6 rec">
        
        <a href="<?= Url::to(['site/leed/']); ?>">
            <div></div>
            <p>
                Leed
            </p>
        </a>
        
    </div>
    
    <div class="col-md col-sm-4 col-6 rec">
        
        <a href="<?= Url::to(['catalog/']); ?>">
            <div></div>
            <p>
                Catalog
            </p>
        </a>
        
    </div>
    
    
</div>
</div>
<div id="menu-overlay4" class="topbar-overlay overlay-animate-opacity" onclick="closeSubMenu()"></div>

            <?php 
/*$menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About Us', 'url' => ['/site/about']], 
        ['label' => 'Services', 'url' => ['/services/index']],
        ['label' => 'Our Fleet', 'url' => ['/ourfleet/index']],
        ['label' => 'Used Cars', 'url' => ['/usedcar/index']],
        ['label' => 'Offers', 'url' => ['/site/offers']],    
        ['label' => 'Contact Us', 'url' => ['/site/contact']],
        ['label' => 'FAQ', 'url' => ['/site/faq']],
    ];
echo yii\widgets\Menu::widget([
        'options' => ['class' => 'clearfix'],
        'items' => $menuItems,
        'linkTemplate'=>'<div class="nav-item"><a href="{url}">{label}</a></div>',
    ]);*/
?>           
            
