<?php
/* @var $this OperadoresPorcentajesController */
/* @var $model OperadoresPorcentajes */

$this->breadcrumbs=array(
	'Operadores Porcentajes'=>array('index'),
	$model->idoperador_porcentaje,
);

$this->menu=array(
	array('label'=>'List OperadoresPorcentajes', 'url'=>array('index')),
	array('label'=>'Create OperadoresPorcentajes', 'url'=>array('create')),
	array('label'=>'Update OperadoresPorcentajes', 'url'=>array('update', 'id'=>$model->idoperador_porcentaje)),
	array('label'=>'Delete OperadoresPorcentajes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idoperador_porcentaje),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OperadoresPorcentajes', 'url'=>array('admin')),
);
?>

<h1>View OperadoresPorcentajes #<?php echo $model->idoperador_porcentaje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idoperador_porcentaje',
		'importe_desde',
		'importe_hasta',
		'porcentaje',
		'idoperador',
		'fecha_mod',
		'activo',
	),
)); ?>
