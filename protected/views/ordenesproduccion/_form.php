<?php
/* @var $this OrdenesProduccionController */
/* @var $model OrdenesProduccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-produccion-form',
	'enableAjaxValidation'=>false,
)); ?>






    <p class="note">Fields with <span class="required">*</span> are required.</p>



    <?php echo $form->errorSummary($model); ?>



    <table class="tablaform">



        <caption>Por favor ingrese los siguientes datos del cliente:</caption>

        <tr>

            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idcliente'); ?>

            </td>

            <td>
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

                        $('#OrdenesProduccion_idcliente').val(ui.item.id);

                         }"

                    ),

                    'htmlOptions' => array(

                        'size' => 60,

                        'placeholder' => 'Buscar Clientes...',

                        'maxlength' => 60,

                    ),

                ));

                ?>

                El cliente no aparece por cuit o razon social?<?php echo CHtml::link('  Agregalo!',array('/clientes/create'), array('target'=>'_blank')); ?>



            </td> 

        </tr>

        <tr>

            <td class="coltitulos">



                <?php echo $form->labelEx($model, 'entrega_idprovincia'); ?>

            </td>

            <td>

                <?php

                echo $form->dropDownList($model, 'entrega_idprovincia', CHtml::listData(Provincias::model()->findAll(

                                        array(

                                            'condition' => 'activo = true',

                                            'order' => 'descripcion')), 'idprovincia', 'descripcion'), array('empty' => 'Seleccione'));

                ?>

                <?php echo $form->error($model, 'entrega_idprovincia'); ?>

            </td>

        </tr>

        <tr>

            <td class="coltitulos">



		<?php echo $form->labelEx($model,'entrega_codigo_postal'); ?>

            </td>

            <td>
		<?php echo $form->textField($model,'entrega_codigo_postal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'entrega_codigo_postal'); ?>

            </td>

        </tr>

        <tr>

            <td class="coltitulos">

					<?php echo $form->labelEx($model,'entrega_localidad'); ?>

            </td>

            <td>

				<?php echo $form->textField($model,'entrega_localidad',array('size'=>60,'maxlength'=>150)); ?>
				<?php echo $form->error($model,'entrega_localidad'); ?>

            </td>

        </tr>
        <tr>

            <td class="coltitulos">

		<?php echo $form->labelEx($model,'porcentaje_facturado'); ?>

            </td>

            <td>

		<?php echo $form->textField($model,'porcentaje_facturado',array('size'=>3,'maxlength'=>3)); ?>%
		<?php echo $form->error($model,'porcentaje_facturado'); ?>

            </td>

        </tr>

        <tr>

            <td colspan="4" >

                <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save');

                ?></td>

        </tr>

    </table>


	<?php
    echo $form->hiddenField($model, 'idcliente', array('value'=>''));
    ?>
<?php $this->endWidget(); ?>

</div><!-- form -->