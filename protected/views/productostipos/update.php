<?php
/* @var $this ProductosTiposController */
/* @var $model ProductosTipos */

$this->breadcrumbs=array(
	'Productos Tiposes'=>array('index'),
	$model->idproducto_tipo=>array('view','id'=>$model->idproducto_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductosTipos', 'url'=>array('index')),
	array('label'=>'Create ProductosTipos', 'url'=>array('create')),
	array('label'=>'View ProductosTipos', 'url'=>array('view', 'id'=>$model->idproducto_tipo)),
	array('label'=>'Manage ProductosTipos', 'url'=>array('admin')),
);
?>

<h1>Update ProductosTipos <?php echo $model->idproducto_tipo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>