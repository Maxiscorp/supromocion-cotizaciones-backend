<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idcliente,
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Create Clientes', 'url'=>array('create')),
	array('label'=>'Update Clientes', 'url'=>array('update', 'id'=>$model->idcliente)),
	array('label'=>'Delete Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>View Clientes #<?php echo $model->idcliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcliente',
		'cuit',
		'razon_social',
		'nombre_comercial',
		'contacto',
		'email',
		'telefono',
		'envia_mails_seguimiento',
		'localidad',
		'codigo_postal',
		'idcondicion_iva',
		'idarchivo_logo',
		'idprovincia',
		'fecha_alta',
		'fecha_ultima_cotizacion_aprobada',
		'recontacar_cotizaciones',
		'activo',
	),
)); ?>
