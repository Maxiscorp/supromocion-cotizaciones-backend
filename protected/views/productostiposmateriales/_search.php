<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idproducto_tipo_material'); ?>
		<?php echo $form->textField($model,'idproducto_tipo_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idproducto_tipo'); ?>
		<?php echo $form->textField($model,'idproducto_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmaterial'); ?>
		<?php echo $form->textField($model,'idmaterial'); ?>
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