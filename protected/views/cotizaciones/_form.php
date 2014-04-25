<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cotizaciones-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->hiddenField($model, 'idcliente', array()); ?>

    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'razon_social',
        'source' => $this->createUrl('/clientes/buscar'),
        'options' =>
        array(
            'showAnim' => 'fold',
            'size' => '30',
            'minLength' => '3',
            'select' => "js:function(event, ui) {
                                                                                $('#Cotizaciones_idcliente').val(ui.item.id);
                         }"
        ),
        'htmlOptions' => array(
            'size' => 60,
            'placeholder' => 'Buscar Clientes...',
            'maxlength' => 60,
        ),
    ));
    ?>
    <div class = "row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->