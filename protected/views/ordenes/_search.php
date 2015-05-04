<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idorden'); ?>
		<?php echo $form->textField($model,'idorden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcotizacion'); ?>
		<?php echo $form->textField($model,'idcotizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcliente'); ?>
		<?php echo $form->textField($model,'idcliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_presupuesto'); ?>
		<?php echo $form->textArea($model,'nro_presupuesto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_entrega'); ?>
		<?php echo $form->textArea($model,'lugar_entrega',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega_idprovincia'); ?>
		<?php echo $form->textField($model,'entrega_idprovincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega_localidad'); ?>
		<?php echo $form->textArea($model,'entrega_localidad',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega_codigo_postal'); ?>
		<?php echo $form->textArea($model,'entrega_codigo_postal',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_facturado'); ?>
		<?php echo $form->textField($model,'porcentaje_facturado',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comision_operador'); ?>
		<?php echo $form->textField($model,'comision_operador',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->