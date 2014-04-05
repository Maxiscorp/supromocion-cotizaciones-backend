<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */

$this->breadcrumbs=array(
	'Productos Tipos Materiales'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductosTiposMateriales', 'url'=>array('index')),
	array('label'=>'Create ProductosTiposMateriales', 'url'=>array('create')),
);
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-tipos-materiales-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'idmaterial0.descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
