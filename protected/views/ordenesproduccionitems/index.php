<?php
/* @var $this OrdenesproduccionitemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Produccion Items',
);

$this->menu=array(
	array('label'=>'Create OrdenesProduccionItems', 'url'=>array('create')),
	array('label'=>'Manage OrdenesProduccionItems', 'url'=>array('admin')),
);
?>

<h1>Ordenes Produccion Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
