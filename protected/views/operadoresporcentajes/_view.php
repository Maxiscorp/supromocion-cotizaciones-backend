<?php
/* @var $this OperadoresPorcentajesController */
/* @var $data OperadoresPorcentajes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idoperador_porcentaje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idoperador_porcentaje), array('view', 'id'=>$data->idoperador_porcentaje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_desde')); ?>:</b>
	<?php echo CHtml::encode($data->importe_desde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe_hasta')); ?>:</b>
	<?php echo CHtml::encode($data->importe_hasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idoperador')); ?>:</b>
	<?php echo CHtml::encode($data->idoperador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mod')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>