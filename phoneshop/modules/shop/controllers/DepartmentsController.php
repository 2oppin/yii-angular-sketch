<?php
class DepartmentsController extends YAController{
    public function actionView(){
        $data = array(
            array(
                'image' => 'yacht.jpg',
                'title' => 'Travel',
                'link' => '/shop/products',
                'description' => 'ttt'
            ),
            array(
                'image' => '9.jpg',
                'title' => 'Services',
                'link' => '/shop/products',
                'description' => 'ddd'
            ),
            array(
                'image' => '8.jpg',
                'title' => 'Products',
                'link' => '/shop/products',
                'description' => 'aaa'
            ),
        );
        $this->_renderJson($data);
    }
    public function actionIndex(){
        $this->renderPartial('index');
    }
}
