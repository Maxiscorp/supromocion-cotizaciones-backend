<?php
/* @var $this ProductosPreciosUnitariosController */
/* @var $model ProductosPreciosUnitarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-precios-unitarios-form',
	'enableAjaxValidation'=>true,
)); ?>
    
	<p class="note">Fields  with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	 <table class="tablaform">
        
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'cantidad_desde'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'cantidad_desde', array('size' => 15, 'maxlength' => 11)); ?>
                <?php echo $form->error($model, 'cantidad_desde'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'cantidad_hasta'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'cantidad_hasta', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'cantidad_hasta'); ?>
            </td>
        </tr>
        <tr>
           <td class="coltitulos">
                <?php echo $form->labelEx($model, 'precio_unitario'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'precio_unitario', array('size' => 12, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'precio_unitario'); ?>
            </td>
            <td colspan="2">
                
		<?php echo CHtml::submitButton('Agregar'); ?>
            </td>
        </tr>
        
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->