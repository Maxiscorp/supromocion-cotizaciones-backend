<?php
/* @var $this OperadoresPorcentajesController */
/* @var $model OperadoresPorcentajes */

$this->breadcrumbs=array(
	'Operadores Porcentajes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OperadoresPorcentajes', 'url'=>array('index')),
	array('label'=>'Manage OperadoresPorcentajes', 'url'=>array('admin')),
);
?>

<h1>Create OperadoresPorcentajes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>