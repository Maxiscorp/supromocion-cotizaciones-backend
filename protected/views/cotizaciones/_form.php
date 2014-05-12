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
    echo $form->hiddenField($model, 'idoperador', array('value' =>Yii::app()->user->getState('idoperador')));
    echo $form->hiddenField($model, 'idcotizacion_estado', array('value'=>3));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <table class="tablaform">

        <caption>Por favor ingrese los siguientes datos del cliente:</caption>
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'razon_social'); ?>
            </td>
            <td>
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
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idmedio_pago'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idmedio_pago', CHtml::listData(MediosPago::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'descripcion')), 'idmedio_pago', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idmedio_pago'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'condiciones_contratacion'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'condiciones_contratacion', array('size' => 20, 'maxlength' => 150)); ?>
                <?php echo $form->error($model, 'condiciones_contratacion'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'observaciones'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'observaciones', array('size' => 20, 'maxlength' => 150)); ?>
                <?php echo $form->error($model, 'observaciones'); ?>
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