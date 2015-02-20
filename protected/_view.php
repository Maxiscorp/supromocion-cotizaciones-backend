<?php
/* @var $this MaterialesController */
/* @var $data Materiales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmaterial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmaterial), array('view', 'id'=>$data->idmaterial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>