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
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    $this->widget('CMultiFileUpload', array(
        'model' => $modelArchivo,
        'attribute' => 'archivo',
        'accept' => 'jpg|gif|png|jpeg',
        'options' => array(
        // 'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
        // 'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
        // 'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
        // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
        // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
        // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
        ),
        'denied' => 'File is not allowed',
        'max' => 10, // max 10 files
    ));
    echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>

        <?php $this->endWidget(); ?>

</div><!-- form -->