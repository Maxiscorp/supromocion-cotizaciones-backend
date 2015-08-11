<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */

$this->breadcrumbs=array(
	'Cotizaciones Parciales Detalles'=>array('index'),
	$model->idcotizacion_parcial_detalle=>array('view','id'=>$model->idcotizacion_parcial_detalle),
	'Update',
);

$this->menu=array(
	array('label'=>'List CotizacionesParcialesDetalle', 'url'=>array('index')),
	array('label'=>'Create CotizacionesParcialesDetalle', 'url'=>array('create')),
	array('label'=>'View CotizacionesParcialesDetalle', 'url'=>array('view', 'id'=>$model->idcotizacion_parcial_detalle)),
	array('label'=>'Manage CotizacionesParcialesDetalle', 'url'=>array('admin')),
);
?>

<h1>Update CotizacionesParcialesDetalle <?php echo $model->idcotizacion_parcial_detalle; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>