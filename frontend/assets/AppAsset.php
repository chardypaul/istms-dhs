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
        'css/sample1.css',
        'css/sample2.css',
        'css/sample3.css',
        'css/sample.css',
        'css/site.css',
        'css/font-awesome/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic',
    ];

   public $js = [
        'https://code.jquery.com/jquery-2.1.3.min.js',
        'js/jquery.easing.min.js',
        'js/custom.js',
        'js/bootstrap.min.js',
        'js/sadlife.js',
        'js/scrollreveal.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/creative.min.js',
        'js/modal.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
  
}