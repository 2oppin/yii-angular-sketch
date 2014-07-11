<!doctype html>
<html lang="en" ng-app="shopApp">
<head>
    <meta charset="utf-8">
    <title>Phones Store</title>
    <?php
        $clientScript = Yii::app()->clientScript;
        $clientScript->registerCssFile(ShopModule::$assetsPath . '/css/app.css');
        $clientScript->registerCssFile(ShopModule::$assetsPath . '/css/bootstrap.css');
        $clientScript->registerCssFile(ShopModule::$assetsPath . '/css/animations.css');
        $clientScript->registerCssFile(ShopModule::$assetsPath . '/css/departments.css');

        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/lib/jquery/jquery-1.10.2.js');

        $clientScript->registerCssFile(ShopModule::$assetsPath . '/css/jquery/' . Yii::app()->getModule('shop')->theme . '/jquery-ui.css?v=1.10.3');
        $clientScript->registerCssFile(ShopModule::$assetsPath . '/css/font-awesome.min.css?v=4.0.3');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/lib/jquery/jquery-ui.js?v=1.10.3');

        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/lib/angular/angular.js');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/lib/angular/angular-animate.js');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/lib/angular/angular-resource.js');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/lib/angular/angular-route.js');

        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/js/shoppingCart.js');
        
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/js/app.js');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/js/animations.js');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/js/controllers.js');

        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/js/filters.js');
        $clientScript->registerScriptFile(ShopModule::$assetsPath . '/js/services.js');
    ?>  
</head>
<body>
    <div class="header">
        <?php echo CHtml::link(CHtml::image('/img/logo_header.png', 'Home'), Yii::app()->homeUrl, array('class' => 'logo')); ?>
    </div>
    
    <nav ng-show="controller != 'DepartmentsListCtrl'">
        <ul class="nav nav-pills">
            <li><a href="javascript:;" ng:click="showCart()"><img src="<?php echo ShopModule::$assetsPath;?>/img/Shopping-Cart.png"></a></li>
        </ul>
    </nav>
    <?php
        $this->renderPartial('partials/cart');
        echo $content;
    ?>
</body>
</html>