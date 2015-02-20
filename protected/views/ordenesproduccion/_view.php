<?php
/* @var $this OrdenesProduccionController */
/* @var $data OrdenesProduccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden_produccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorden_produccion), array('view', 'id'=>$data->idorden_produccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comision_operador')); ?>:</b>
	<?php echo CHtml::encode($data->comision_operador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcotizacion')); ?>:</b>
	<?php echo CHtml::encode($data->idcotizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden_estado')); ?>:</b>
	<?php echo CHtml::encode($data->idorden_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_facturado')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_facturado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega_idprovincia')); ?>:</b>
	<?php echo CHtml::encode($data->entrega_idprovincia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega_localidad')); ?>:</b>
	<?php echo CHtml::encode($data->entrega_localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrega_codigo_postal')); ?>:</b>
	<?php echo CHtml::encode($data->entrega_codigo_postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>