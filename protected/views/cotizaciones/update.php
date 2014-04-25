<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */



$this->menu=array(
	array('label'=>'List Cotizaciones', 'url'=>array('index')),
	array('label'=>'Create Cotizaciones', 'url'=>array('create')),
	array('label'=>'View Cotizaciones', 'url'=>array('view', 'id'=>$model->idcotizacion)),
	array('label'=>'Manage Cotizaciones', 'url'=>array('admin')),
);
?>

<h1>Update Cotizaciones <?php echo $model->idcotizacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>