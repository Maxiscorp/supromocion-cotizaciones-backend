<?php
/* @var $this OperadoresPorcentajesController */
/* @var $model OperadoresPorcentajes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operadores-porcentajes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'importe_desde'); ?>
		<?php echo $form->textField($model,'importe_desde',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'importe_desde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe_hasta'); ?>
		<?php echo $form->textField($model,'importe_hasta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'importe_hasta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idoperador'); ?>
		<?php echo $form->textField($model,'idoperador'); ?>
		<?php echo $form->error($model,'idoperador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
		<?php echo $form->error($model,'fecha_mod'); ?>
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