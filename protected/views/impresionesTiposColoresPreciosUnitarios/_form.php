<?php
/* @var $this ImpresionesTiposColoresPreciosUnitariosController */
/* @var $model ImpresionesTiposColoresPreciosUnitarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'impresiones-tipos-colores-precios-unitarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idimpresion_tipo_color_precio_unitario'); ?>
		<?php echo $form->textField($model,'idimpresion_tipo_color_precio_unitario'); ?>
		<?php echo $form->error($model,'idimpresion_tipo_color_precio_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idimpresion_tipo'); ?>
		<?php echo $form->textField($model,'idimpresion_tipo'); ?>
		<?php echo $form->error($model,'idimpresion_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idimpresion_color'); ?>
		<?php echo $form->textField($model,'idimpresion_color'); ?>
		<?php echo $form->error($model,'idimpresion_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_unitario'); ?>
		<?php echo $form->textField($model,'precio_unitario',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'precio_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->