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
    ];


   public $js = [
        'vendor/vendor/jquery/jquery.min.js',
         'vendor/vendor/bootstrap/js/bootstrap.min.js',
          'vendor/js/sadlife.js',
           'vendor/vendor/scrollreveal/scrollreveal.min.js',
            'vendor/vendor/magnific-popup/jquery.magnific-popup.min.js',
             'js/creative.min.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
  
}
