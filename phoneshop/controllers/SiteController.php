<?php

class SiteController extends CController {

    public function actionIndex() 
    {
        $this->redirect('/shop/index');
    }

}
