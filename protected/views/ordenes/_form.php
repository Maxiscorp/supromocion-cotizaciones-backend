<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-form',
	'enableAjaxValidation'=>false,
)); ?>


    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <table class="tablaform">
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'fecha'); ?>
            </td>
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'fecha'); ?>
            </td>
            <td>

                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'fecha',
                    // additional javascript options for the date picker plugin
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yymmdd',
                        'altField' => '#fecha',
                        'altFormat' => 'dd/mm/yy', // show to user format
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;'
                    ),
                ));
                ?>
                <?php echo $form->error($model, 'fecha'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'proveedor');  ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'proveedor', array('size' => 12, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'proveedor'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="4">

                <?php echo CHtml::submitButton('Agregar'); ?>
            </td>
        </tr>

    </table>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<!--
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcotizacion'); ?>
		<?php echo $form->textField($model,'idcotizacion'); ?>
		<?php echo $form->error($model,'idcotizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcliente'); ?>
		<?php echo $form->textField($model,'idcliente'); ?>
		<?php echo $form->error($model,'idcliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_presupuesto'); ?>
		<?php echo $form->textArea($model,'nro_presupuesto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nro_presupuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_entrega'); ?>
		<?php echo $form->textArea($model,'lugar_entrega',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lugar_entrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->checkBox($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entrega_idprovincia'); ?>
		<?php echo $form->textField($model,'entrega_idprovincia'); ?>
		<?php echo $form->error($model,'entrega_idprovincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entrega_localidad'); ?>
		<?php echo $form->textArea($model,'entrega_localidad',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'entrega_localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entrega_codigo_postal'); ?>
		<?php echo $form->textArea($model,'entrega_codigo_postal',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'entrega_codigo_postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje_facturado'); ?>
		<?php echo $form->textField($model,'porcentaje_facturado',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'porcentaje_facturado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comision_operador'); ?>
		<?php echo $form->textField($model,'comision_operador',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'comision_operador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>-->
