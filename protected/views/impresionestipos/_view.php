<?php
/* @var $this ImpresionesTiposController */
/* @var $data ImpresionesTipos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idimpresion_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idimpresion_tipo), array('view', 'id'=>$data->idimpresion_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>