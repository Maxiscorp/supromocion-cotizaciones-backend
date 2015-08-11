<?php
/* @var $this CotizacionesController */
/* @var $data Cotizaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcotizacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcotizacion), array('view', 'id'=>$data->idcotizacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarchivo_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->idarchivo_pdf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idoperador')); ?>:</b>
	<?php echo CHtml::encode($data->idoperador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcotizacion_estado')); ?>:</b>
	<?php echo CHtml::encode($data->idcotizacion_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmedio_pago')); ?>:</b>
	<?php echo CHtml::encode($data->idmedio_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_vencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_vencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_recontacto')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_recontacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_recontacto_recordatorio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_recontacto_recordatorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recontactar')); ?>:</b>
	<?php echo CHtml::encode($data->recontactar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condiciones_contratacion')); ?>:</b>
	<?php echo CHtml::encode($data->condiciones_contratacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>