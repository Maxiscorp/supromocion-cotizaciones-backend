<?php
/* @var $this OperadoresPorcentajesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Operadores Porcentajes',
);

$this->menu=array(
	array('label'=>'Create OperadoresPorcentajes', 'url'=>array('create')),
	array('label'=>'Manage OperadoresPorcentajes', 'url'=>array('admin')),
);
?>

<h1>Operadores Porcentajes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
