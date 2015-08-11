<?php
/* @var $this ProductosMaterialesController */
/* @var $model ProductosMateriales */

$this->breadcrumbs=array(
	'Productos Materiales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductosMateriales', 'url'=>array('index')),
	array('label'=>'Manage ProductosMateriales', 'url'=>array('admin')),
);
?>

<h1>Create ProductosMateriales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>