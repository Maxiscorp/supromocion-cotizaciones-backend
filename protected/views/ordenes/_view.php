<?php
/* @var $this OrdenesController */
/* @var $data Ordenes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorden), array('view', 'id'=>$data->idorden)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcotizacion')); ?>:</b>
	<?php echo CHtml::encode($data->idcotizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->nro_presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_entrega')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_entrega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega_idprovincia')); ?>:</b>
	<?php echo CHtml::encode($data->entrega_idprovincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega_localidad')); ?>:</b>
	<?php echo CHtml::encode($data->entrega_localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega_codigo_postal')); ?>:</b>
	<?php echo CHtml::encode($data->entrega_codigo_postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_facturado')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_facturado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comision_operador')); ?>:</b>
	<?php echo CHtml::encode($data->comision_operador); ?>
	<br />

	*/ ?>

</div>