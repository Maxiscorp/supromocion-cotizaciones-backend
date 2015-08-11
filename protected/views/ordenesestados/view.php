<?php
/* @var $this OrdenesEstadosController */
/* @var $model OrdenesEstados */

$this->breadcrumbs=array(
	'Ordenes Estadoses'=>array('index'),
	$model->idorden_estado,
);

$this->menu=array(
	array('label'=>'List OrdenesEstados', 'url'=>array('index')),
	array('label'=>'Create OrdenesEstados', 'url'=>array('create')),
	array('label'=>'Update OrdenesEstados', 'url'=>array('update', 'id'=>$model->idorden_estado)),
	array('label'=>'Delete OrdenesEstados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idorden_estado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdenesEstados', 'url'=>array('admin')),
);
?>

<h1>View OrdenesEstados #<?php echo $model->idorden_estado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idorden_estado',
		'descripcion',
		'activo',
	),
)); ?>
