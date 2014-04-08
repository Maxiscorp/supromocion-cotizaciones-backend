<?php
/* @var $this ProductosTiposController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productos Tiposes',
);

$this->menu=array(
	array('label'=>'Create ProductosTipos', 'url'=>array('create')),
	array('label'=>'Manage ProductosTipos', 'url'=>array('admin')),
);
?>

<h1>Productos Tiposes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
