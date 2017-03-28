<?php
namespace frontend\themes\monarch;

use yii\web\AssetBundle;

class MonarchAsset extends AssetBundle{
    public $sourcePath = '@frontend/themes/monarch/assets';
    
    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'css/project.min.css',
    ];
    public $js = [
        'js/base.min.js',
        'js/project.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}