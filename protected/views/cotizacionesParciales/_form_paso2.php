<?php
/* @var $this CotizacionesParcialesController */
/* @var $model CotizacionesParciales */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cotizaciones-parciales-form',
        'enableAjaxValidation' => false,
    ));

    echo $form->hiddenField($model, 'idcotizacion', array('value' => $model->idcotizacion));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <table class="tablaform">

        <caption>Por favor ingrese los siguientes datos del cliente:</caption>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idproducto'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idproducto', CHtml::listData(Productos::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'nombre')), 'idproducto', 'nombre'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idproducto'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idimpresion_colores'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idimpresion_colores', CHtml::listData(ImpresionesColores::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'descripcion')), 'idimpresion_colores', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idimpresion_colores'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idimpresion_tipo'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idimpresion_tipo', CHtml::listData(ImpresionesTipos::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'descripcion')), 'idimpresion_tipo', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idimpresion_tipo'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idimpresion_tipo'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idimpresion_fases', CHtml::listData(ImpresionesFases::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'idimpresion_fases')), 'idimpresion_fases', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idimpresion_fases'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="4">

                <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
            </td>
        </tr>
    </table>

    <?php $this->endWidget(); ?>

</div><!-- form -->