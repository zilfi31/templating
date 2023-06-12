<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/img/favicon.png',
        'template/img/apple-touch-icon.png',
        'template/css/main.css',
        'template/vendor/aos/aos.css',
        'template/vendor/bootstrap/css/bootstrap.min.css',
        'template/vendor/bootstrap-icons/bootstrap-icons.css',
        'template/vendor/glightbox/css/glightbox.min.css',
        'template/vendor/swiper/swiper-bundle.min.css',
    ];
    public $js = [
        'template/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'template/vendor/aos/aos.js',
        'template/vendor/glightbox/js/glightbox.min.js',
        'template/vendor/purecounter/purecounter_vanilla.js',
        'template/vendor/swiper/swiper-bundle.min.js',
        'template/vendor/isotope-layout/isotope.pkgd.min.js',
        'template/vendor/php-email-form/validate.js',
        'template/js/main.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
