<?php
/* @var $this CotizacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cotizaciones',
);

$this->menu=array(
	array('label'=>'Create Cotizaciones', 'url'=>array('create')),
	array('label'=>'Manage Cotizaciones', 'url'=>array('admin')),
);
?>

<h1>Cotizaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
