<?php
/* @var $this OrdenesEstadosController */
/* @var $model OrdenesEstados */

$this->breadcrumbs=array(
	'Ordenes Estadoses'=>array('index'),
	$model->idorden_estado=>array('view','id'=>$model->idorden_estado),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenesEstados', 'url'=>array('index')),
	array('label'=>'Create OrdenesEstados', 'url'=>array('create')),
	array('label'=>'View OrdenesEstados', 'url'=>array('view', 'id'=>$model->idorden_estado)),
	array('label'=>'Manage OrdenesEstados', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesEstados <?php echo $model->idorden_estado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>