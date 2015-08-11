<?php
/* @var $this OperadoresPorcentajesController */
/* @var $model OperadoresPorcentajes */

$this->breadcrumbs=array(
	'Operadores Porcentajes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OperadoresPorcentajes', 'url'=>array('index')),
	array('label'=>'Create OperadoresPorcentajes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#operadores-porcentajes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Operadores Porcentajes</h1>

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
	'id'=>'operadores-porcentajes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idoperador_porcentaje',
		'importe_desde',
		'importe_hasta',
		'porcentaje',
		'idoperador',
		'fecha_mod',
		/*
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
