<?php
/* @var $this OperadoresController */
/* @var $model Operadores */

$this->breadcrumbs=array(
	'Operadores'=>array('index'),
	$model->idoperador,
);

$this->menu=array(
	array('label'=>'List Operadores', 'url'=>array('index')),
	array('label'=>'Create Operadores', 'url'=>array('create')),
	array('label'=>'Update Operadores', 'url'=>array('update', 'id'=>$model->idoperador)),
	array('label'=>'Delete Operadores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idoperador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Operadores', 'url'=>array('admin')),
);
?>

<h1>View Operadores #<?php echo $model->idoperador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idoperador',
		'nombre',
		'apellido',
		'usuario',
		'password',
		'email',
		'idoperador_tipo',
		'activo',
	),
)); ?>
