<?php

class YAController extends CController
{
    public function rules()
    {
        return array();
    }

    public function missingAction($actionId)
    {
        return $this->redirect(Yii::app()->homeUrl . (is_object($this->module) ? $this->module->id : ''));
    }

    public function getActionParams()
    {
        return Yii::app()->request->isPostRequest ? $_POST : $_GET;
    }

    protected function _getJSONRequest()
    {
        $post = file_get_contents("php://input");
        return CJSON::decode($post, true);
    }
    
    protected function _renderJson($data)
    {
        header('Content-type: application/json');
        echo CJSON::encode($data);

        Yii::app()->end();
    }

    protected function _renderSuccess($info = false)
    {
        return $this->_renderJson(array('result' => true, 'info' => $info));
    }

    protected function _renderError($errors = false)
    {
        if (is_string($errors)) $errors = (array) $errors;
        return $this->_renderJson(array('result' => false, 'errors' => $errors));
    }

    /**
     * @deprecated
     */
    protected function _renderErrorWithHttpCode($errors = false)
    {
        header('HTTP/1.1 500 Internal Server Error');
        return $this->_renderError($errors);
    }

    protected function _forbidden()
    {
        return $this->forbidden();
    }
}

?>
