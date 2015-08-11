<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $model ProductosPreciosUnitarios */

$this->breadcrumbs=array(
	'Productos Precios Unitarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductosPreciosUnitarios', 'url'=>array('index')),
	array('label'=>'Manage ProductosPreciosUnitarios', 'url'=>array('admin')),
);
?>

<h1>Create ProductosPreciosUnitarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>