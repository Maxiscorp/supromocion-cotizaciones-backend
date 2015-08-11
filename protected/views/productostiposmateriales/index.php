<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productos Tipos Materiales',
);

$this->menu=array(
	array('label'=>'Create ProductosTiposMateriales', 'url'=>array('create')),
	array('label'=>'Manage ProductosTiposMateriales', 'url'=>array('admin')),
);
?>

<h1>Productos Tipos Materiales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
