<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $data ProductosPreciosUnitarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprecio_producto_unitario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idprecio_producto_unitario), array('view', 'id'=>$data->idprecio_producto_unitario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto')); ?>:</b>
	<?php echo CHtml::encode($data->idproducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_desde')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_desde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_hasta')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_hasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_unitario')); ?>:</b>
	<?php echo CHtml::encode($data->precio_unitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mod')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>