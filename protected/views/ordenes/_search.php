<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <table class="tablaform">
        <tr>
            <td class="coltitulos">
                <?php echo CHtml::label('Cuit/Razon social', ''); ?>
            </td>
            <td colspan="3">
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
                       $('#Ordenes_idcliente').val(ui.item.id);
                }"
                        ),
                    'htmlOptions' => array(
                        'size' => 60,
                        'placeholder' => 'Buscar Cliente...',
                        'maxlength' => 60,
                    ),
                ));
                ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo CHtml::label('Fecha  desde', ''); ?>
            </td>
            <td>
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'Ordenes[fecha_desde]',
                    'model'=>$model,
                    // additional javascript options for the date picker plugin
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yymmdd',
                        'altField' => '#Ordenes_fecha_desde',
                        'altFormat' => 'dd/mm/yy', // show to user format
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;'
                    ),
                ));
                ?>
            </td>
            <td class="coltitulos">

                <?php echo CHtml::label('Fecha hasta', ''); ?>
            </td>
            <td>
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'Ordenes[fecha_hasta]',
                    'model'=>$model,
                    // additional javascript options for the date picker plugin
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yymmdd',
                        'altField' => '#Ordenes_fecha_hasta',
                        'altFormat' => 'dd/mm/yy', // show to user format
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;'
                    ),
                ));
                ?>
            </td>
        </tr>


    </table>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search from -->