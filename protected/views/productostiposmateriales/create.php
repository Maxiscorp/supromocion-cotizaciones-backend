<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */

$this->breadcrumbs=array(
	'Productos Tipos Materiales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductosTiposMateriales', 'url'=>array('index')),
	array('label'=>'Manage ProductosTiposMateriales', 'url'=>array('admin')),
);
?>

<h1>Create ProductosTiposMateriales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>