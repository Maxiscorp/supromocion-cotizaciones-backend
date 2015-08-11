<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $model ProductosPreciosUnitarios */

$this->breadcrumbs=array(
	'Productos Precios Unitarioses'=>array('index'),
	$model->idprecio_producto_unitario=>array('view','id'=>$model->idprecio_producto_unitario),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductosPreciosUnitarios', 'url'=>array('index')),
	array('label'=>'Create ProductosPreciosUnitarios', 'url'=>array('create')),
	array('label'=>'View ProductosPreciosUnitarios', 'url'=>array('view', 'id'=>$model->idprecio_producto_unitario)),
	array('label'=>'Manage ProductosPreciosUnitarios', 'url'=>array('admin')),
);
?>

<h1>Update ProductosPreciosUnitarios <?php echo $model->idprecio_producto_unitario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>