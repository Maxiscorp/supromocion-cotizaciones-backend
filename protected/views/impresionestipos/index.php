<?php
/* @var $this ImpresionesTiposController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create ImpresionesTipos', 'url'=>array('create')),
	array('label'=>'Manage ImpresionesTipos', 'url'=>array('admin')),
);
?>

<h1>Impresiones Tiposes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
