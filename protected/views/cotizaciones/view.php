<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */


$this->menu=array(
	array('label'=>'List Cotizaciones', 'url'=>array('index')),
	array('label'=>'Create Cotizaciones', 'url'=>array('create')),
	array('label'=>'Update Cotizaciones', 'url'=>array('update', 'id'=>$model->idcotizacion)),
	array('label'=>'Delete Cotizaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcotizacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cotizaciones', 'url'=>array('admin')),
);
?>

<h1>View Cotizaciones #<?php echo $model->idcotizacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcotizacion',
		'idarchivo_pdf',
		'idcliente',
		'idoperador',
		'idcotizacion_estado',
		'idmedio_pago',
		'fecha_ingreso',
		'fecha_vencimiento',
		'fecha_recontacto',
		'fecha_recontacto_recordatorio',
		'recontactar',
		'condiciones_contratacion',
		'observaciones',
		'activo',
	),
)); ?>
