<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Materiales', 'url'=>array('index')),
	array('label'=>'Create Materiales', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#materiales-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Materiales</h1>




<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materiales-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idmaterial',
		'nombre',
		array(
			'class'=>'CButtonColumn',
            'template' => '{update}{delete}',
			'buttons' => array
                (                
					'delete' => array(
						'label' => 'Borrar material',
						'imageUrl' => $this->createUrl('../../images/silk/user_delete.png'),
					)
				)
		),
	),
)); ?>
