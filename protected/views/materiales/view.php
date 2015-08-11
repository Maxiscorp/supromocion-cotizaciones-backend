<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->idmaterial,
);

$this->menu=array(
	array('label'=>'List Materiales', 'url'=>array('index')),
	array('label'=>'Create Materiales', 'url'=>array('create')),
	array('label'=>'Update Materiales', 'url'=>array('update', 'id'=>$model->idmaterial)),
	array('label'=>'Delete Materiales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmaterial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materiales', 'url'=>array('admin')),
);
?>

<h1>View Materiales #<?php echo $model->idmaterial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmaterial',
		'nombre',
		'descripcion',
		'activo',
	),
)); ?>
