<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cotizaciones Parciales Detalles',
);

$this->menu=array(
	array('label'=>'Create CotizacionesParcialesDetalle', 'url'=>array('create')),
	array('label'=>'Manage CotizacionesParcialesDetalle', 'url'=>array('admin')),
);
?>

<h1>Cotizaciones Parciales Detalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
