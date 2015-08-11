<?php
/* @var $this OperadoresController */
/* @var $model Operadores */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'operadores-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php if (Yii::app()->user->hasFlash('success')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('success'); ?>
        </div>
    <?php endif; ?>

    <?php echo $form->errorSummary($model); ?>
    <table class="tablaform">

        <caption>Por favor ingrese los siguientes datos del operador:</caption>
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'nombre'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'nombre', array('size' => 15, 'maxlength' => 30)); ?>
                <?php echo $form->error($model, 'nombre'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'apellido'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'apellido', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'apellido'); ?>
            </td>
        </tr>        
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'usuario'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'usuario', array('size' => 15, 'maxlength' => 30)); ?>
                <?php echo $form->error($model, 'usuario'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'email'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'email', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'email'); ?>
            </td>
        </tr>

    </table>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->