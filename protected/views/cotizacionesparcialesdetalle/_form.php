<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cotizaciones-parciales-detalle-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>
    <table class="tablaform">
        <?php
        echo $form->hiddenField($model, 'idcotizacion_parcial', array('value' => $model->idcotizacion_parcial));
        ?>  
            <?php
        echo $form->hiddenField($model, 'idcotizacion_parcial_detalle', array('value' => $model->idcotizacion_parcial_detalle));
        ?>  

        <tr>
            <td class="coltitulos">
<?php echo $form->labelEx($model, 'cantidad'); ?>
            </td>
            <td>

<?php echo $form->textField($model, 'cantidad'); ?>
<?php echo $form->error($model, 'cantidad'); ?>
            </td>


        </tr>


    </table>
    <div class="row buttons">
    <?php echo CHtml::submitButton( 'Seguir al Paso 2'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->