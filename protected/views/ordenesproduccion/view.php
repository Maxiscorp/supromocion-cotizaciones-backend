<?php
/* @var $this OrdenesProduccionController */
/* @var $model OrdenesProduccion */

$this->breadcrumbs=array(
	'Ordenes Produccions'=>array('index'),
	$model->idorden_produccion,
);

$this->menu=array(
	array('label'=>'List OrdenesProduccion', 'url'=>array('index')),
	array('label'=>'Create OrdenesProduccion', 'url'=>array('create')),
	array('label'=>'Update OrdenesProduccion', 'url'=>array('update', 'id'=>$model->idorden_produccion)),
	array('label'=>'Delete OrdenesProduccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idorden_produccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdenesProduccion', 'url'=>array('admin')),
);
?>

<h1>View OrdenesProduccion #<?php echo $model->idorden_produccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idorden_produccion',
		'idcliente',
		'comision_operador',
		'idcotizacion',
		'idorden_estado',
		'porcentaje_facturado',
		'entrega_idprovincia',
		'entrega_localidad',
		'entrega_codigo_postal',
		'fecha_ingreso',
		'activo',
	),
)); ?>
