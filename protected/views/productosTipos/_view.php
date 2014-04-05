<?php
/* @var $this ProductosTiposController */
/* @var $data ProductosTipos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproducto_tipo), array('view', 'id'=>$data->idproducto_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>