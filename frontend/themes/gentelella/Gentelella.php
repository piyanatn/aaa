<?php
namespace frontend\themes\gentelella;

use yii\web\AssetBundle;

class GentelellaAsset extends AssetBundle{
    public $sourcePath = '@frontend/themes/gentelella/assets';
    
    public $css = [
        'css/animate.min.css',
        'css/bootstrap.min.css',
        'css/shCoreDefault.css',
        'css/docs.min.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery.min.js',
         'js/shBrushXml.js',
          'js/shCore.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}