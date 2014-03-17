<?php
/* @var $this OperadoresController */
/* @var $model Operadores */

$this->breadcrumbs=array(
	'Operadores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Operadores', 'url'=>array('index')),
	array('label'=>'Manage Operadores', 'url'=>array('admin')),
);
?>

<h1>Create Operadores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>