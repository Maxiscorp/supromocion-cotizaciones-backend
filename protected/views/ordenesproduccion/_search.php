<?php
/* @var $this OrdenesProduccionController */
/* @var $model OrdenesProduccion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idorden_produccion'); ?>
		<?php echo $form->textField($model,'idorden_produccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcliente'); ?>
		<?php echo $form->textField($model,'idcliente',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comision_operador'); ?>
		<?php echo $form->textField($model,'comision_operador',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcotizacion'); ?>
		<?php echo $form->textField($model,'idcotizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idorden_estado'); ?>
		<?php echo $form->textField($model,'idorden_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_facturado'); ?>
		<?php echo $form->textField($model,'porcentaje_facturado',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega_idprovincia'); ?>
		<?php echo $form->textField($model,'entrega_idprovincia',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega_localidad'); ?>
		<?php echo $form->textField($model,'entrega_localidad',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrega_codigo_postal'); ?>
		<?php echo $form->textField($model,'entrega_codigo_postal',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
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