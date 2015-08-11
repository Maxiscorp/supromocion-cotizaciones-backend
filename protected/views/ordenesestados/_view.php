<?php
/* @var $this OrdenesEstadosController */
/* @var $data OrdenesEstados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden_estado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorden_estado), array('view', 'id'=>$data->idorden_estado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>