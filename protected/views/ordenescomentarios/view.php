<?php
/* @var $this OrdenesComentariosController */
/* @var $model OrdenesComentarios */

$this->breadcrumbs=array(
	'Ordenes Comentarioses'=>array('index'),
	$model->idorden_comentario,
);

$this->menu=array(
	array('label'=>'List OrdenesComentarios', 'url'=>array('index')),
	array('label'=>'Create OrdenesComentarios', 'url'=>array('create')),
	array('label'=>'Update OrdenesComentarios', 'url'=>array('update', 'id'=>$model->idorden_comentario)),
	array('label'=>'Delete OrdenesComentarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idorden_comentario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdenesComentarios', 'url'=>array('admin')),
);
?>

<h1>View OrdenesComentarios #<?php echo $model->idorden_comentario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idorden_comentario',
		'idorden',
		'comentario',
		'fecha',
		'activo',
	),
)); ?>
