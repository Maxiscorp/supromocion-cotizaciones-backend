<?php
/* @var $this ImpresionesTiposController */
/* @var $model ImpresionesTipos */


$this->menu=array(
	array('label'=>'List ImpresionesTipos', 'url'=>array('index')),
	array('label'=>'Create ImpresionesTipos', 'url'=>array('create')),
	array('label'=>'View ImpresionesTipos', 'url'=>array('view', 'id'=>$model->idimpresion_tipo)),
	array('label'=>'Manage ImpresionesTipos', 'url'=>array('admin')),
);
?>

<h1>Update ImpresionesTipos <?php echo $model->idimpresion_tipo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>