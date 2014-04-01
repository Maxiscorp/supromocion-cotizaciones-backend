<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cuit'); ?>
		<?php echo $form->textField($model,'cuit',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cuit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razon_social'); ?>
		<?php echo $form->textField($model,'razon_social',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'razon_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_comercial'); ?>
		<?php echo $form->textField($model,'nombre_comercial',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_comercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'envia_mails_seguimiento'); ?>
		<?php echo $form->textField($model,'envia_mails_seguimiento'); ?>
		<?php echo $form->error($model,'envia_mails_seguimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_postal'); ?>
		<?php echo $form->textField($model,'codigo_postal',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'codigo_postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcondicion_iva'); ?>
		<?php echo $form->textField($model,'idcondicion_iva',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'idcondicion_iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idarchivo_logo'); ?>
		<?php echo $form->textField($model,'idarchivo_logo'); ?>
		<?php echo $form->error($model,'idarchivo_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idprovincia'); ?>
		<?php echo $form->textField($model,'idprovincia',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'idprovincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_alta'); ?>
		<?php echo $form->textField($model,'fecha_alta'); ?>
		<?php echo $form->error($model,'fecha_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ultima_cotizacion_aprobada'); ?>
		<?php echo $form->textField($model,'fecha_ultima_cotizacion_aprobada'); ?>
		<?php echo $form->error($model,'fecha_ultima_cotizacion_aprobada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recontacar_cotizaciones'); ?>
		<?php echo $form->textField($model,'recontacar_cotizaciones'); ?>
		<?php echo $form->error($model,'recontacar_cotizaciones'); ?>
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