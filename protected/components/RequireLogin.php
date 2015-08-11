<?php
class RequireLogin extends CBehavior
{
	public function attach($owner)
	{
		$owner->attachEventHandler('onBeginRequest', array($this, 'handleBeginRequest'));
	}
	public function handleBeginRequest($event)
	{
		/*echo Yii::app()->request->requestUri;
		exit();
		*/
	Yii::app()->language='es'; 
		if (Yii::app()->user->isGuest && Yii::app()->request->requestUri != '/site/login') {
			Yii::app()->user->loginRequired();
		}
	}
}
?>