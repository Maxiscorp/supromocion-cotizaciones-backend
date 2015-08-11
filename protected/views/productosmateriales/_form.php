<?php
/* @var $this ProductosMaterialesController */
/* @var $model ProductosMateriales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-materiales-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idproducto'); ?>
		<?php echo $form->textField($model,'idproducto'); ?>
		<?php echo $form->error($model,'idproducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idmaterial'); ?>
		<?php echo $form->textField($model,'idmaterial'); ?>
		<?php echo $form->error($model,'idmaterial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_alta'); ?>
		<?php echo $form->textField($model,'fecha_alta'); ?>
		<?php echo $form->error($model,'fecha_alta'); ?>
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