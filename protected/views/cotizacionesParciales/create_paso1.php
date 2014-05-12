<?php
/* @var $this CotizacionesParcialesController */
/* @var $model CotizacionesParciales */

$this->breadcrumbs=array(
	'Cotizaciones Parciales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CotizacionesParciales', 'url'=>array('index')),
	array('label'=>'Manage CotizacionesParciales', 'url'=>array('admin')),
);
?>

<h1>Nueva cotizacion parcial - Paso 1 </h1>

<?php echo $this->renderPartial('_form_paso1', array('model'=>$model)); ?>