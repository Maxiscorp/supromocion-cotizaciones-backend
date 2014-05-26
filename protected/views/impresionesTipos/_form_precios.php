<?php
/* @var $this ImpresionesTiposColoresPreciosUnitariosController */
/* @var $model ImpresionesTiposColoresPreciosUnitarios */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'impresiones-tipos-colores-precios-unitarios-form',
        'enableAjaxValidation' => true,
));
    echo $form->hiddenField($model, 'idimpresion_tipo', array('value' => $model->idimpresion_tipo));
    echo $form->hiddenField($model, 'idimpresion_color', array('value' => $model->idimpresion_color));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <table class="tablaform">

        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'cantidad'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'cantidad', array('size' => 15, 'maxlength' => 11)); ?>
                <?php echo $form->error($model, 'cantidad'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'precio_unitario'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'precio_unitario', array('size' => 12, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'precio_unitario'); ?>
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