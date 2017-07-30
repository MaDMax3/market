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
        'dashboard/css/style.css',
        'dashboard/css/bootstrap.min.css',
        'dashboard/css/font-awesome.css',
        'dashboard/css/icon-font.min.css',
        'dashboard/css/animate.css',
    ];
    public $js = [
        'dashboard/js/Chart.js',
        'dashboard/js/wow.min.js',
        'dashboard/js/jquery-1.10.2.min.js',
        'dashboard/js/jquery.nicescroll.js',
        'dashboard/js/scripts.js',
        'dashboard/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
