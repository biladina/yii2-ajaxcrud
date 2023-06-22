<?php 

namespace yii2ajaxcrud\ajaxcrud;

use yii\web\AssetBundle;
use Yii;

/**
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0
 */
class CrudAsset extends AssetBundle
{
    public $sourcePath = '@ajaxcrud/assets';

//    public $publishOptions = [
//        'forceCopy' => true,
//    ];

    public $css = [
        'ajaxcrud.css'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'kartik\grid\GridViewAsset',
        'yii2ajaxcrud\ajaxcrud\FontAwesomeAsset',
    ];
    
    public function init()
    {
        // In dev mode use non-minified javascripts
        $this->js = YII_DEBUG ? [
            'ModalRemote.js',
            'ajaxcrud.js',
        ] : [
            'ModalRemote.min.js',
            'ajaxcrud.min.js',
        ];

        parent::init();

        if (!isset(Yii::$app->i18n->translations['yii2-ajaxcrud']))
        {
            Yii::$app->i18n->translations['yii2-ajaxcrud'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@yii2ajaxcrud/ajaxcrud/messages',
                'sourceLanguage' => 'en',
            ];
        }
    }
}
