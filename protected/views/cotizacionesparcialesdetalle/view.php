<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */

$this->breadcrumbs=array(
	'Cotizaciones Parciales Detalles'=>array('index'),
	$model->idcotizacion_parcial_detalle,
);

$this->menu=array(
	array('label'=>'List CotizacionesParcialesDetalle', 'url'=>array('index')),
	array('label'=>'Create CotizacionesParcialesDetalle', 'url'=>array('create')),
	array('label'=>'Update CotizacionesParcialesDetalle', 'url'=>array('update', 'id'=>$model->idcotizacion_parcial_detalle)),
	array('label'=>'Delete CotizacionesParcialesDetalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcotizacion_parcial_detalle),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CotizacionesParcialesDetalle', 'url'=>array('admin')),
);
?>

<h1>View CotizacionesParcialesDetalle #<?php echo $model->idcotizacion_parcial_detalle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcotizacion_parcial_detalle',
		'idcotizacion_parcial',
		'cantidad',
		'importe_impresion',
		'importe_producto',
		'activo',
	),
)); ?>
