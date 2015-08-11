<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */

$this->breadcrumbs=array(
	'Productos Tipos Materiales'=>array('index'),
	$model->idproducto_tipo_material,
);

$this->menu=array(
	array('label'=>'List ProductosTiposMateriales', 'url'=>array('index')),
	array('label'=>'Create ProductosTiposMateriales', 'url'=>array('create')),
	array('label'=>'Update ProductosTiposMateriales', 'url'=>array('update', 'id'=>$model->idproducto_tipo_material)),
	array('label'=>'Delete ProductosTiposMateriales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproducto_tipo_material),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductosTiposMateriales', 'url'=>array('admin')),
);
?>

<h1>View ProductosTiposMateriales #<?php echo $model->idproducto_tipo_material; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproducto_tipo_material',
		'idproducto_tipo',
		'idmaterial',
		'fecha_ingreso',
		'activo',
	),
)); ?>
