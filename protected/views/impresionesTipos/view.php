<?php
/* @var $this ImpresionesTiposController */
/* @var $model ImpresionesTipos */

$this->breadcrumbs=array(
	'Impresiones Tiposes'=>array('index'),
	$model->idimpresion_tipo,
);

$this->menu=array(
	array('label'=>'List ImpresionesTipos', 'url'=>array('index')),
	array('label'=>'Create ImpresionesTipos', 'url'=>array('create')),
	array('label'=>'Update ImpresionesTipos', 'url'=>array('update', 'id'=>$model->idimpresion_tipo)),
	array('label'=>'Delete ImpresionesTipos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idimpresion_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImpresionesTipos', 'url'=>array('admin')),
);
?>

<h1>View ImpresionesTipos #<?php echo $model->idimpresion_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idimpresion_tipo',
		'descripcion',
		'activo',
	),
)); ?>
