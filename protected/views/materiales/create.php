<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Materiales', 'url'=>array('index')),
	array('label'=>'Manage Materiales', 'url'=>array('admin')),
);
?>

<h1>Create Materiales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>