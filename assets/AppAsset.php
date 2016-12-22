<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/reset.css',
        'css/style.css',
        'css/grid.css',
        'css/prettyPhoto.css',
    ];
    public $js = [
        'js/jquery-1.6.3.min.js',
        'js/cufon-yui.js',
        'js/cufon-replace.js',
        'js/Vegur_700.font.js',
        'js/Vegur_400.font.js',
        'js/FF-cash.js',
        'js/script.js',
        'js/easyTooltip.js',
        'js/jquery.easing.1.3.js',
        'js/hover-image.js',
        'js/jquery.prettyPhoto.js',
        'js/tms-0.3.js',
        'js/tms_presets.js',
        'js/index.js',
    ];
    public $depends = [
    ];
}
