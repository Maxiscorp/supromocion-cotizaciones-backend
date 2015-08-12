<?php
/* @var $this OrdenesComentariosController */
/* @var $model OrdenesComentarios */

$this->breadcrumbs=array(
	'Ordenes Comentarioses'=>array('index'),
	$model->idorden_comentario=>array('view','id'=>$model->idorden_comentario),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenesComentarios', 'url'=>array('index')),
	array('label'=>'Create OrdenesComentarios', 'url'=>array('create')),
	array('label'=>'View OrdenesComentarios', 'url'=>array('view', 'id'=>$model->idorden_comentario)),
	array('label'=>'Manage OrdenesComentarios', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesComentarios <?php echo $model->idorden_comentario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>