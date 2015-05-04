<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */

$this->breadcrumbs=array(
	'Ordenes'=>array('index'),
	$model->idorden=>array('view','id'=>$model->idorden),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ordenes', 'url'=>array('index')),
	array('label'=>'Create Ordenes', 'url'=>array('create')),
	array('label'=>'View Ordenes', 'url'=>array('view', 'id'=>$model->idorden)),
	array('label'=>'Manage Ordenes', 'url'=>array('admin')),
);
?>

<h1>Update Ordenes <?php echo $model->idorden; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>