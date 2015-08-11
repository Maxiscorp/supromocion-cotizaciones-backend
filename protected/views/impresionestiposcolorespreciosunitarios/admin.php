<?php
/* @var $this ImpresionesTiposColoresPreciosUnitariosController */
/* @var $model ImpresionesTiposColoresPreciosUnitarios */

$this->breadcrumbs=array(
	'Impresiones Tipos Colores Precios Unitarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ImpresionesTiposColoresPreciosUnitarios', 'url'=>array('index')),
	array('label'=>'Create ImpresionesTiposColoresPreciosUnitarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#impresiones-tipos-colores-precios-unitarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Impresiones Tipos Colores Precios Unitarioses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'impresiones-tipos-colores-precios-unitarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idimpresion_tipo_color_precio_unitario',
		'idimpresion_tipo',
		'idimpresion_color',
		'cantidad',
		'precio_unitario',
		'fecha_ingreso',
		/*
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
