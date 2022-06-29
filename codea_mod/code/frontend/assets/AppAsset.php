<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,700,900',
        'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700',
        'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i',
        'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700',
        'css/bootstrap.min.css',
        'css/style.css',
        'css/responsive.css',
        'css/common.css',
        'css/font-awesome.css',
        'css/navigation.css',
        'css/owl.carousel.css',
        'css/animate.css',
        'css/flexslider.css',
        'css/colorbox.css',
        'css/nouislider.css',
        //'css/jquery.bxslider.min.css',        
        'css/jquery-ui.css',
        
    ];
    public $js = [
        //'js/jquery-1.11.1.min.js',
        'js/owl.carousel.min.js',
        'js/wow.min.js',
        'js/jquery.colorbox.js',
       // 'js/mixitup.min.js',
       'js/jquery.flexslider-min.js',
        //'js/jquery.malihu.PageScroll2id.min.js',
        'js/nouislider.min.js',
        //'js/jquery.bxslider.min.js',
        'js/jquery-ui.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
    ];
}
