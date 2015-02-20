<?php
/* @var $this OrdenesproduccionitemsController */
/* @var $model OrdenesProduccionItems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-produccion-items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <table class="tablaform">



        <caption>Por favor ingrese los siguientes datos del cliente:</caption>

        <tr>		<tr>
            <td class="coltitulos">
		<?php echo $form->labelEx($model,'cantidad'); ?>
            </td>
            <td>
				<?php echo $form->textField($model,'cantidad'); ?>
				<?php echo $form->error($model,'cantidad'); ?>
            </td>
        </tr>
		<tr>
            <td class="coltitulos">
				<?php echo $form->labelEx($model,'importe'); ?>
            </td>
            <td>
				<?php echo $form->textField($model,'importe',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'importe'); ?>
            </td>
        </tr>
		<tr>
            <td class="coltitulos">
		<?php echo $form->labelEx($model,'nota'); ?>
            </td>
            <td>

		<?php echo $form->textField($model,'nota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nota'); ?>
            </td>
        </tr>
		
        <tr>

            <td colspan="4" >

                <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save');

                ?></td>

        </tr>

    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->