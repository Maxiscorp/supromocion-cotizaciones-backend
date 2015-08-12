<?php
/* @var $this OrdenesComentariosController */
/* @var $data OrdenesComentarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden_comentario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorden_comentario), array('view', 'id'=>$data->idorden_comentario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorden')); ?>:</b>
	<?php echo CHtml::encode($data->idorden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />


</div>