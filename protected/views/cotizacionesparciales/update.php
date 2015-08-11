<?php
/* @var $this CotizacionesParcialesController */
/* @var $model CotizacionesParciales */

$this->breadcrumbs=array(
	'Cotizaciones Parciales'=>array('index'),
	$model->idcotizacion_parcial=>array('view','id'=>$model->idcotizacion_parcial),
	'Update',
);

$this->menu=array(
	array('label'=>'List CotizacionesParciales', 'url'=>array('index')),
	array('label'=>'Create CotizacionesParciales', 'url'=>array('create')),
	array('label'=>'View CotizacionesParciales', 'url'=>array('view', 'id'=>$model->idcotizacion_parcial)),
	array('label'=>'Manage CotizacionesParciales', 'url'=>array('admin')),
);
?>

<h1>Update CotizacionesParciales <?php echo $model->idcotizacion_parcial; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>