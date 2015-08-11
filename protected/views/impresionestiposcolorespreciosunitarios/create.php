<?php
/* @var $this ImpresionesTiposColoresPreciosUnitariosController */
/* @var $model ImpresionesTiposColoresPreciosUnitarios */

$this->breadcrumbs=array(
	'Impresiones Tipos Colores Precios Unitarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImpresionesTiposColoresPreciosUnitarios', 'url'=>array('index')),
	array('label'=>'Manage ImpresionesTiposColoresPreciosUnitarios', 'url'=>array('admin')),
);
?>

<h1>Create ImpresionesTiposColoresPreciosUnitarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>