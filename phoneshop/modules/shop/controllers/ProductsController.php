<?php
class ProductsController extends YAController{
    
    public function actionView($id = false){
        $assets_dir=Yii::getPathOfAlias('application.modules.shop.assets');
        if( $id && $id != 'phones' ) {
            $data=json_decode(file_get_contents($assets_dir.'/phones/'.$id.'.json'));
            foreach($data->images as &$image){
                $image = ShopModule::$assetsPath.'/'.$image;
            }
        } else {
            $data=json_decode(file_get_contents($assets_dir.'/phones/phones.json'));
            foreach($data as &$val){
                $val->imageUrl = ShopModule::$assetsPath.'/'.$val->imageUrl;
                $val->price = rand(1,99);
            }
        }
        $this->_renderJson($data);
    }

    public function actionList(){
        $this->renderPartial('list');
    }
    public function actionDetail(){
        $this->renderPartial('detail');
    }
}
