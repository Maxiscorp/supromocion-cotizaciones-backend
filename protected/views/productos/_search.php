<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idproducto'); ?>
		<?php echo $form->textField($model,'idproducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idproducto_tipo'); ?>
		<?php echo $form->textField($model,'idproducto_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmoneda'); ?>
		<?php echo $form->textField($model,'idmoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_producto_interno'); ?>
		<?php echo $form->textField($model,'codigo_producto_interno',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_producto_proveedor'); ?>
		<?php echo $form->textField($model,'codigo_producto_proveedor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_alta'); ?>
		<?php echo $form->textField($model,'fecha_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->