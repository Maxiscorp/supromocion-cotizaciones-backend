<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */

$this->breadcrumbs=array(
	'Ordenes'=>array('index'),
	$model->idorden,
);

$this->menu=array(
	array('label'=>'List Ordenes', 'url'=>array('index')),
	array('label'=>'Create Ordenes', 'url'=>array('create')),
	array('label'=>'Update Ordenes', 'url'=>array('update', 'id'=>$model->idorden)),
	array('label'=>'Delete Ordenes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idorden),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ordenes', 'url'=>array('admin')),
);
?>

<h1>View Ordenes #<?php echo $model->idorden; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idorden',
		'idcotizacion',
		'idcliente',
		'nro_presupuesto',
		'fecha',
		'lugar_entrega',
		'activo',
		'entrega_idprovincia',
		'entrega_localidad',
		'entrega_codigo_postal',
		'porcentaje_facturado',
		'comision_operador',
	),
)); ?>
