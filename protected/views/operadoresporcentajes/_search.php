<?php
/* @var $this OperadoresPorcentajesController */
/* @var $model OperadoresPorcentajes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idoperador_porcentaje'); ?>
		<?php echo $form->textField($model,'idoperador_porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_desde'); ?>
		<?php echo $form->textField($model,'importe_desde',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe_hasta'); ?>
		<?php echo $form->textField($model,'importe_hasta',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idoperador'); ?>
		<?php echo $form->textField($model,'idoperador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
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