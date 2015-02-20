<?php
/* @var $this ProductosTiposController */
/* @var $model ProductosTipos */

$this->breadcrumbs=array(
	'Productos Tiposes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductosTipos', 'url'=>array('index')),
	array('label'=>'Manage ProductosTipos', 'url'=>array('admin')),
);
?>

<h1>Nueva Categoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>