<?php
namespace frontend\themes\creative\assets;

use yii\web\AssetBundle;

class CreativeAsset extends AssetBundle
{
    public $sourcePath = '@creative/dist';
    public $css = [
        'css/style.css',
        //  'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.css'
    ];

    public $js = [
        //'js/contact_me.js',
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/main.js',
        'js/jquery.magnific-popup.js',
        'js/owl.carousel.js'
//        'js/wow.min.js',
//        'js/mb.bgndGallery.js',
//        'js/mb.bgndGallery.effects.js',
//        'js/jquery.simple-text-rotator.min.js',
//        'js/jquery.scrollTo.min.js',
//        'js/jquery.nav.js',
//        'js/modernizr.custom.js',
//        'js/grid.js',
//        'js/stellar.js',
//        'js/custom.js',
//        'contactform/contactform.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        //'agency\assets\FontAwesomeAsset'
    ];
}