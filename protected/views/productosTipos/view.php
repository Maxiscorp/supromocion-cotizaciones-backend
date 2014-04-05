<?php
/* @var $this ProductosTiposController */
/* @var $model ProductosTipos */

$this->breadcrumbs=array(
	'Productos Tiposes'=>array('index'),
	$model->idproducto_tipo,
);

$this->menu=array(
	array('label'=>'List ProductosTipos', 'url'=>array('index')),
	array('label'=>'Create ProductosTipos', 'url'=>array('create')),
	array('label'=>'Update ProductosTipos', 'url'=>array('update', 'id'=>$model->idproducto_tipo)),
	array('label'=>'Delete ProductosTipos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproducto_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductosTipos', 'url'=>array('admin')),
);
?>

<h1>View ProductosTipos #<?php echo $model->idproducto_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproducto_tipo',
		'descripcion',
		'activo',
	),
)); ?>
