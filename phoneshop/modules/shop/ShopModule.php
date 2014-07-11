<?php

class ShopModule extends CWebModule
{
    static $assetsPath='';
    public $theme = null;
    public function init()
    {
        Yii::import('application.modules.shop.core.*');

        Yii::app()->assetManager->forceCopy = true;
        
        $this->layoutPath = Yii::getPathOfAlias('application.modules.shop.views.layouts');
        $this->layout = 'main';
        
        self::$assetsPath = Yii::app()->getAssetManager()->publish(
                        Yii::getPathOfAlias('application.modules.shop.assets'));

        return parent::init();
    }
}

?>
