<?php
/* @var $this OrdenesproduccionitemsController */
/* @var $data OrdenesProduccionItems */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden_produccion_item')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorden_produccion_item), array('view', 'id'=>$data->idorden_produccion_item)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
	<?php echo CHtml::encode($data->nota); ?>
	<br />


</div>