<?php
class PurchaseController extends YAController{
    public function actionCreate(){
        // echo request just for test
        $this->_renderJSON($this->_getJSONRequest());
    }

}
