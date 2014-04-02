<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

echo CHtml::link('Agregar cliente', $this->createAbsoluteUrl('clientes/create'));
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clientes-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{items}{pager}',
	'filter'=>$model,
	'columns'=>array(
		'idcliente',
		'cuit',
		'razon_social',
		'nombre_comercial',
		'contacto',
		'email',
		/*
		'telefono',
		'envia_mails_seguimiento',
		'localidad',
		'codigo_postal',
		'idcondicion_iva',
		'idarchivo_logo',
		'idprovincia',
		'fecha_alta',
		'fecha_ultima_cotizacion_aprobada',
		'recontacar_cotizaciones',
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
