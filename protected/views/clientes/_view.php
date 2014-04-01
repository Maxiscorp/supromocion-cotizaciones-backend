<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcliente), array('view', 'id'=>$data->idcliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuit')); ?>:</b>
	<?php echo CHtml::encode($data->cuit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razon_social')); ?>:</b>
	<?php echo CHtml::encode($data->razon_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_comercial')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_comercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('envia_mails_seguimiento')); ?>:</b>
	<?php echo CHtml::encode($data->envia_mails_seguimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad')); ?>:</b>
	<?php echo CHtml::encode($data->localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_postal')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcondicion_iva')); ?>:</b>
	<?php echo CHtml::encode($data->idcondicion_iva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarchivo_logo')); ?>:</b>
	<?php echo CHtml::encode($data->idarchivo_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprovincia')); ?>:</b>
	<?php echo CHtml::encode($data->idprovincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_alta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ultima_cotizacion_aprobada')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ultima_cotizacion_aprobada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recontacar_cotizaciones')); ?>:</b>
	<?php echo CHtml::encode($data->recontacar_cotizaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>