<?php
/* @var $this ImpresionesTiposController */
/* @var $model ImpresionesTipos */

$this->breadcrumbs=array(
	'Impresiones Tiposes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImpresionesTipos', 'url'=>array('index')),
	array('label'=>'Manage ImpresionesTipos', 'url'=>array('admin')),
);
?>

<h1>Nuevo tipo de impresion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>