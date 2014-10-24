<?php
/* @var $this OrdenesproduccionitemsController */
/* @var $model OrdenesProduccionItems */

$this->breadcrumbs=array(
	'Ordenes Produccion Items'=>array('index'),
	$model->idorden_produccion_item,
);

$this->menu=array(
	array('label'=>'List OrdenesProduccionItems', 'url'=>array('index')),
	array('label'=>'Create OrdenesProduccionItems', 'url'=>array('create')),
	array('label'=>'Update OrdenesProduccionItems', 'url'=>array('update', 'id'=>$model->idorden_produccion_item)),
	array('label'=>'Delete OrdenesProduccionItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idorden_produccion_item),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdenesProduccionItems', 'url'=>array('admin')),
);
?>

<h1>View OrdenesProduccionItems #<?php echo $model->idorden_produccion_item; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idorden_produccion_item',
		'cantidad',
		'importe',
		'fecha_ingreso',
		'activo',
		'nota',
	),
)); ?>
