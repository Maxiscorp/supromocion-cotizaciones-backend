<?php
/* @var $this ProductosMaterialesController */
/* @var $model ProductosMateriales */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'productos-materiales-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>



    <div class="row">
        <?php echo $form->labelEx($model, 'idmaterial'); ?>
        <?php
        echo $form->dropDownList($model, 'idmaterial', CHtml::listData($modelProductosTiposMateriales, 'idmaterial', 'idmaterial0.descripcion'), array('empty' => 'Seleccione'));
        ?>
<?php echo $form->error($model, 'idmaterial'); ?>
    </div>


    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->