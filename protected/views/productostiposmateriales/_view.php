<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $data ProductosTiposMateriales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto_tipo_material')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproducto_tipo_material), array('view', 'id'=>$data->idproducto_tipo_material)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->idproducto_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmaterial')); ?>:</b>
	<?php echo CHtml::encode($data->idmaterial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>