<?php
/* @var $this OperadoresController */
/* @var $model Operadores */

$this->breadcrumbs=array(
	'Operadores'=>array('index'),
	$model->idoperador=>array('view','id'=>$model->idoperador),
	'Update',
);

?>

<h1>Mis Datos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>