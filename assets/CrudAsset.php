<?php
namespace callmez\ajaxcrud\assets;

use yii\web\AssetBundle;

/**
 * Class CrudAsset
 * @package callmez\ajaxcrud\assets
 */
class CrudAsset extends AssetBundle
{
    public $sourcePath = '@callmez/ajaxcrud/web';
    public $js = [
        'js/ajaxcrud.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'kartik\grid\GridViewAsset',
    ];
}
