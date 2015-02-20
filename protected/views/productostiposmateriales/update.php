<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */

$this->breadcrumbs=array(
	'Productos Tipos Materiales'=>array('index'),
	$model->idproducto_tipo_material=>array('view','id'=>$model->idproducto_tipo_material),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductosTiposMateriales', 'url'=>array('index')),
	array('label'=>'Create ProductosTiposMateriales', 'url'=>array('create')),
	array('label'=>'View ProductosTiposMateriales', 'url'=>array('view', 'id'=>$model->idproducto_tipo_material)),
	array('label'=>'Manage ProductosTiposMateriales', 'url'=>array('admin')),
);
?>

<h1>Update ProductosTiposMateriales <?php echo $model->idproducto_tipo_material; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>