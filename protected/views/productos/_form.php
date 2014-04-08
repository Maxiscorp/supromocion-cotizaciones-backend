<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'productos-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'nombre'); ?>
<?php echo $form->textField($model, 'nombre', array('size' => 20, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'nombre'); ?>
    </div>
    <div class="row">
            <?php echo $form->labelEx($model, 'idproducto_tipo'); ?>
            <?php
            echo $form->dropDownList($model, 'idproducto_tipo', CHtml::listData(ProductosTipos::model()->findAll(
                                    array(
                                        'condition' => 'activo = true',
                                        'order' => 'descripcion')), 'idproducto_tipo', 'descripcion'), array());
            ?>
            <?php echo $form->error($model, 'idproducto_tipo'); ?>
    </div>

    <div class="row">
            <?php
            echo $form->labelEx($model, 'idmoneda');
            echo $form->dropDownList($model, 'idmoneda', CHtml::listData(Monedas::model()->findAll(
                                    array(
                                        'condition' => 'activo = true',
                                        'order' => 'descripcion')), 'idmoneda', 'descripcion'), array());
            ?>
            <?php echo $form->error($model, 'idmoneda'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'codigo_producto_interno'); ?>
<?php echo $form->textField($model, 'codigo_producto_interno', array('size' => 13, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'codigo_producto_interno'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'codigo_producto_proveedor'); ?>
<?php echo $form->textField($model, 'codigo_producto_proveedor', array('size' => 13, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'codigo_producto_proveedor'); ?>
    </div>




    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->