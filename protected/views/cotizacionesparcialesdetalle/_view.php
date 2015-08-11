<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $data CotizacionesParcialesDetalle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcotizacion_parcial_detalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcotizacion_parcial_detalle), array('view', 'id'=>$data->idcotizacion_parcial_detalle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcotizacion_parcial')); ?>:</b>
	<?php echo CHtml::encode($data->idcotizacion_parcial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_impresion')); ?>:</b>
	<?php echo CHtml::encode($data->importe_impresion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_producto')); ?>:</b>
	<?php echo CHtml::encode($data->importe_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>