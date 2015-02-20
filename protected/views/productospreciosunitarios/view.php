<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $model ProductosPreciosUnitarios */

$this->breadcrumbs=array(
	'Productos Precios Unitarioses'=>array('index'),
	$model->idprecio_producto_unitario,
);

$this->menu=array(
	array('label'=>'List ProductosPreciosUnitarios', 'url'=>array('index')),
	array('label'=>'Create ProductosPreciosUnitarios', 'url'=>array('create')),
	array('label'=>'Update ProductosPreciosUnitarios', 'url'=>array('update', 'id'=>$model->idprecio_producto_unitario)),
	array('label'=>'Delete ProductosPreciosUnitarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idprecio_producto_unitario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductosPreciosUnitarios', 'url'=>array('admin')),
);
?>

<h1>View ProductosPreciosUnitarios #<?php echo $model->idprecio_producto_unitario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idprecio_producto_unitario',
		'idproducto',
		'cantidad_desde',
		'cantidad_hasta',
		'precio_unitario',
		'fecha_mod',
		'activo',
	),
)); ?>
