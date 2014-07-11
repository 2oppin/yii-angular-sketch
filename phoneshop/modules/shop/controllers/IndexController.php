<?php
class IndexController extends YAController{
    public function actionIndex(){
        $this->render('index');
    }
    public function actionProducts(){
        $this->render('products');
    }

}
