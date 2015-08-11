<?php
/* @var $this OperadoresPorcentajesController */
/* @var $model OperadoresPorcentajes */

$this->breadcrumbs=array(
	'Operadores Porcentajes'=>array('index'),
	$model->idoperador_porcentaje=>array('view','id'=>$model->idoperador_porcentaje),
	'Update',
);

$this->menu=array(
	array('label'=>'List OperadoresPorcentajes', 'url'=>array('index')),
	array('label'=>'Create OperadoresPorcentajes', 'url'=>array('create')),
	array('label'=>'View OperadoresPorcentajes', 'url'=>array('view', 'id'=>$model->idoperador_porcentaje)),
	array('label'=>'Manage OperadoresPorcentajes', 'url'=>array('admin')),
);
?>

<h1>Update OperadoresPorcentajes <?php echo $model->idoperador_porcentaje; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>