<?php
class WebUser extends CWebUser
{
    public $loginUrl = array('site/login');
    
    public function esAdministrador(){
        if (Yii::app()->user->getState('administrador')==1)
            return true;
        else
            return false;
    }

}
?>