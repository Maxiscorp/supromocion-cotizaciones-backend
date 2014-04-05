<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-tipos-materiales-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idproducto_tipo'); ?>
		<?php echo $form->textField($model,'idproducto_tipo'); ?>
		<?php echo $form->error($model,'idproducto_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idmaterial'); ?>
		<?php echo $form->textField($model,'idmaterial'); ?>
		<?php echo $form->error($model,'idmaterial'); ?>
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