<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>