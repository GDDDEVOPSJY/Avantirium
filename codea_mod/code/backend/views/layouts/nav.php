<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use kartik\sidenav\SideNav;
use yii\helpers\Url;
$session = Yii::$app->session;
$permissions = $session->get('permissions');
//echo "<pre>";print_r($permissions); exit;
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo Yii::$app->homeUrl; ?>" style="min-width: 282px;color: #00ACDE;" >
          <!-- <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>images/logo.png" alt="Logo" style="width: 100%;height: 100%;" />-->
		  <img src="<?= Yii::$app->params['frontEndHomeUrl'] ?>assets/images/codea_technologies.png" alt="Logo" style="width: 100%;height: 100%;" />
		   
        </a>
    </div>
    <!-- Top Menu Items -->
    <?php
    
    
    $menuItems = [];
    if (!Yii::$app->user->isGuest) {
        
        $menuItems[] = ['label' => '<i class="fa fa-user user-img"></i> ' . Yii::$app->user->identity->username, 'items' => [
                //['label' => '<i class="fa fa-user"></i> Update Profile', 'url' => ['/site/update-profile']],
               ['label' => '<i class="fa fa-fw fa-gear"></i>Change Passwod', 'url' => ['/site/change-password']],
                ['label' => '<i class="fa fa-fw fa-power-off"></i> Logout', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
        ]];
    }
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-right top-nav'],
        'items' => $menuItems,
        'encodeLabels' => false
    ]);
    ?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse left-bar">
        <div id="testDiv">
            <?php
            $menuItems = [];
            if (!Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '<i class="fa fa-fw fa-dashboard"></i> Dashboard', 'url' => ['/site/index']];
                		
                if(in_array("careers_view", $permissions)){
                $menuItems[] = ['label' => '<i class="fa fa-cog"></i> Careers', 'url' => ['/careers/index']];
                }
				if(in_array("careerform_view", $permissions)){
                $menuItems[] = ['label' => '<i class="fa fa-cog"></i> Job Application', 'url' => ['/careerform/index']];
                }
				//if(in_array("qualificationform_view", $permissions)){
               // $menuItems[] = ['label' => '<i class="fa fa-cog"></i>Partners Qualification', 'url' => ['/qualificationform/index']];
               // }

                 if(in_array("strategic_partnersform_view", $permissions) || in_array("businesspartners_form_view", $permissions)
					|| in_array("development_partnersform_view", $permissions) || in_array("certified_consultantsform_view", $permissions)){
                    $arr=array();
                    if(in_array("strategic_partnersform_view", $permissions)){
                        $arr[]=[ 'label' => 'Strategic Partners', 'url' => ['/strategicpartnersform/index']];
                    }
                    if(in_array("business_partnersform_view", $permissions)){
                        $arr[]=[ 'label' => 'Business Partners', 'url' => ['/businesspartnersform/index'] ];
                    }
                    if(in_array("development_partnersform_view", $permissions)){
                        $arr[]=[ 'label' => 'Development Partners', 'url' => ['/developmentpartnersform/index'] ];
                    }
					if(in_array("certified_consultantsform_view", $permissions)){
                        $arr[]=[ 'label' => 'Certified Consultants', 'url' => ['/certifiedconsultantsform/index'] ];
                    }
                    $menuItems[] = [
                        'label' => '<i class="fa fa-cogs"></i> Partners Form',
                        'items' =>$arr                        
                    ];
                }

                if(in_array("user_view", $permissions)){
                $menuItems[] = ['label' => '<i class="fa fa-cog"></i> Users', 'url' => ['/user/index']];
                } 

					
            }
            
            echo SideNav::widget([
                //'type' => SideNav::TYPE_PRIMARY,
                'options' => ['class' => 'side-nav'],
                'items' => $menuItems,
                'encodeLabels' => false,
                'heading' => false
            ]);
            ?>
        </div>
    </div>
   
    <!-- /.navbar-collapse -->
</nav>