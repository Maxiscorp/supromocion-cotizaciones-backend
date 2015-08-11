<?php
/* @var $this OrdenesEstadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Estadoses',
);

$this->menu=array(
	array('label'=>'Create OrdenesEstados', 'url'=>array('create')),
	array('label'=>'Manage OrdenesEstados', 'url'=>array('admin')),
);
?>

<h1>Ordenes Estadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
