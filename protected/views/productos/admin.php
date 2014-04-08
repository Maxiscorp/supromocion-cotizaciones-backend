<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('admin'),
	'Manage',
);

?>

<h1>ABM Productos</h1>
<?php 

echo CHtml::link('Nuevo producto', $this->createAbsoluteUrl('productos/create'));
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo_producto_interno',
		'codigo_producto_proveedor',
		'nombre',
		'idproductoTipo.descripcion',
		'idmoneda0.descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
