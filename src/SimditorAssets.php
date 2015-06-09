<?php
namespace Simditor;
use yii\web\AssetBundle;

class SimditorAssets extends AssetBundle
{
    public $sourcePath = "@vendor/rogeecn/yii2-simditor/assets/simditor-2.1.13";

    public $js = [
        'scripts/module.js',
        'scripts/hotkeys.js',
        'scripts/uploader.js',
        'scripts/simditor.js',
    ];
    public $css = [
        'styles/simditor.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
} 