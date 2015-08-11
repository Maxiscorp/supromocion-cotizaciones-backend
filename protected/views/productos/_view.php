<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproducto), array('view', 'id'=>$data->idproducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->idproducto_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->idmoneda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_producto_interno')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_producto_interno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_producto_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_producto_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_alta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	*/ ?>

</div>