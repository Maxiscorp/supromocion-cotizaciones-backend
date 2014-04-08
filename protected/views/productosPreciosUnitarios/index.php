<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productos Precios Unitarioses',
);

$this->menu=array(
	array('label'=>'Create ProductosPreciosUnitarios', 'url'=>array('create')),
	array('label'=>'Manage ProductosPreciosUnitarios', 'url'=>array('admin')),
);
?>

<h1>Productos Precios Unitarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
