<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */
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
                        'placeholder' => 'Buscar Cliente...',
                        'maxlength' => 60,
                    ),
                ));
                ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'idproducto_tipo'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idproducto_tipo', CHtml::listData(ProductosTipos::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'descripcion')), 'idproducto_tipo', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idproducto_tipo'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo CHtml::label('Fecha cotizacion desde', ''); ?>
            </td>
            <td>
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'fecha_cotizacion_desde',
                    // additional javascript options for the date picker plugin
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yymmdd',
                        'altField' => '#fecha_cotizacion_desde',
                        'altFormat' => 'dd/mm/yy', // show to user format
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;'
                    ),
                ));
                ?>
            </td>
            <td class="coltitulos">

                <?php echo CHtml::label('Fecha cotizacion hasta', ''); ?>
            </td>
            <td>
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'name' => 'fecha_cotizacion_hasta',
                    // additional javascript options for the date picker plugin
                    'options' => array(
                        'showAnim' => 'fold',
                        'dateFormat' => 'yymmdd',
                        'altField' => '#fecha_cotizacion_hasta',
                        'altFormat' => 'dd/mm/yy', // show to user format
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;'
                    ),
                ));
                ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">
                <?php echo CHtml::label('Operador', ''); ?></td>
            <td>

                <?php
                echo $form->dropDownList($model, 'idoperador', CHtml::listData(Operadores::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'nombre')), 'idoperador', 'NombreCompleto'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idoperador'); ?>
            </td>
            <td class="coltitulos">
                <?php echo CHtml::label('Estado de la cotizacion', ''); ?></td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idcotizacion_estado', CHtml::listData(CotizacionesEstados::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'descripcion')), 'idcotizacion_estado', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idcotizacion_estado'); ?>
            </td>
        </tr>
        <tr>
            <td class="coltitulos">

                <?php echo CHtml::label('Importe total desde', ''); ?>
            </td> 
            <td>

                <?php echo $form->textField($model, 'importe_total_desde', array('size' => 15, 'maxlength' => 11)); ?>
                <?php echo $form->error($model, 'importe_total_desde'); ?>
            </td>
            <td class="coltitulos">

                <?php echo CHtml::label('Importe total hasta', ''); ?>
            </td> 
            <td>

                <?php echo $form->textField($model, 'importe_total_hasta', array('size' => 15, 'maxlength' => 11)); ?>
                <?php echo $form->error($model, 'importe_total_hasta'); ?>
            </td>
        </tr>
    </table>

    <div class="row buttons" >
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->