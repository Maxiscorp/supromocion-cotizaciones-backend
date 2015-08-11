<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcotizacion_parcial_detalle'); ?>
		<?php echo $form->textField($model,'idcotizacion_parcial_detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcotizacion_parcial'); ?>
		<?php echo $form->textField($model,'idcotizacion_parcial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_impresion'); ?>
		<?php echo $form->textField($model,'importe_impresion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_producto'); ?>
		<?php echo $form->textField($model,'importe_producto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->