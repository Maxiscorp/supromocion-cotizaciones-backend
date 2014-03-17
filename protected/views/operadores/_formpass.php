<?php
/* @var $this OperadoresController */
/* @var $model Operadores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operadores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
?>

	<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'password_new'); ?>
		<?php echo $form->passwordField($model,'password_new',array('size'=>15,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password_new'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password_new_repeat'); ?>
		<?php echo $form->passwordField($model,'password_new_repeat',array('size'=>15,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password_new_repeat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->