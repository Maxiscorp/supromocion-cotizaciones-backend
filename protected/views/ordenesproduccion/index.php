<?php
/* @var $this OrdenesProduccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Produccions',
);

$this->menu=array(
	array('label'=>'Create OrdenesProduccion', 'url'=>array('create')),
	array('label'=>'Manage OrdenesProduccion', 'url'=>array('admin')),
);
?>

<h1>Ordenes Produccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
