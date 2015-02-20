<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->idmaterial=>array('view','id'=>$model->idmaterial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materiales', 'url'=>array('index')),
	array('label'=>'Create Materiales', 'url'=>array('create')),
	array('label'=>'View Materiales', 'url'=>array('view', 'id'=>$model->idmaterial)),
	array('label'=>'Manage Materiales', 'url'=>array('admin')),
);
?>

<h1>Update Materiales <?php echo $model->idmaterial; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>