<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $model ProductosPreciosUnitarios */

$this->breadcrumbs=array(
	'Productos Precios Unitarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductosPreciosUnitarios', 'url'=>array('index')),
	array('label'=>'Create ProductosPreciosUnitarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-precios-unitarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Productos Precios Unitarioses</h1>

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
	'id'=>'productos-precios-unitarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idprecio_producto_unitario',
		'idproducto',
		'cantidad_desde',
		'cantidad_hasta',
		'precio_unitario',
		'fecha_mod',
		/*
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
