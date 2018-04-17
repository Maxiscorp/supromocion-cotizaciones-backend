<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
	<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<!-- blueprint CSS framework -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<style>
    	.ui-tabs-hide { display: none !important; }
	</style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div class="logo" style="float:left;" ><?php echo "Sistema de cotizaciones"; ?> </div>
		<div id="logo" style="float:right;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.gif" /></div>
		
	<div class="clear"></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				/*array('label'=>'Inicio', 'url'=>array('/site/index'),'visible'=>!Yii::app()->user->isGuest),*/
				array('label'=>'Cotizaciones', 'url'=>array('/cotizaciones/admin'),'visible'=>!Yii::app()->user->isGuest,'active'=>$this->paginamenutabstop==="Cotizaciones"?true:false),				
				array('label'=>'Ordenes de produccion', 'url'=>array('/ordenes/admin'),'visible'=>!Yii::app()->user->isGuest,'active'=>$this->paginamenutabstop==="OrdenesProduccion"?true:false),
				array('label'=>'ABMs', 'url'=>array('/clientes/admin'),'visible'=>!Yii::app()->user->isGuest,'active'=>$this->paginamenutabstop==="ABMs"?true:false),
				array('label'=>'Mis Datos', 'url'=>array('/operadores/update'),'visible'=>!Yii::app()->user->isGuest,'active'=>$this->paginamenutabstop==="MisDatos"?true:false),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				
				
				array('label'=>'Salir ('.Yii::app()->user->getState('nombre').' '.Yii::app()->user->getState('apellido').')', 
				'url'=>array('/site/logout'), 
				'visible'=>!Yii::app()->user->isGuest,
				'itemOptions'=>array('class'=>'css-item'),
				)
			),
		)); 
            ?>
	</div><!-- mainmenu -->
	<?php /*if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif */
        ?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Sysnetic.com.ar<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
