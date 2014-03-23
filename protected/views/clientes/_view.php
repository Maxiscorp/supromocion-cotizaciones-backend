<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">
   <table class="tablaform">
        
        <caption>Por favor ingrese los siguientes datos del cliente:</caption>
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'cuit'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'cuit', array('size' => 15, 'maxlength' => 11)); ?>
                <?php echo $form->error($model, 'cuit'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'contacto'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'contacto', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'contacto'); ?>
            </td>
        </tr>
        <tr>

            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'razon_social'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'razon_social', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'razon_social'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'nombre_comercial'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'nombre_comercial', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'nombre_comercial'); ?>
            </td>

        </tr>
        <tr>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'email'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'email', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'email'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'telefono'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'telefono', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'telefono'); ?>
            </td>
        </tr>

        <tr>

            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'idprovincia'); ?>
            </td>
            <td>
                <?php
                echo $form->dropDownList($model, 'idprovincia', CHtml::listData(Provincias::model()->findAll(
                                        array(
                                            'condition' => 'activo = true',
                                            'order' => 'descripcion')), 'idprovincia', 'descripcion'), array('empty' => 'Seleccione'));
                ?>
                <?php echo $form->error($model, 'idprovincia'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'localidad'); ?>
            </td>
            <td>
                <?php echo $form->textField($model, 'localidad', array('size' => 20, 'maxlength' => 100)); ?>
                <?php echo $form->error($model, 'localidad'); ?>
            </td>

        </tr>
        <tr>

            <td class="coltitulos">

                <?php echo $form->labelEx($model, 'codigo_postal'); ?>
            </td>
            <td>

                <?php echo $form->textField($model, 'codigo_postal', array('size' => 20, 'maxlength' => 20)); ?>
                <?php echo $form->error($model, 'codigo_postal'); ?>
            </td>
            <td class="coltitulos">
                <?php echo $form->labelEx($model, 'idcondicion_iva'); ?>
            </td>
            <td>
            <?php
            echo $form->dropDownList($model, 'idcondicion_iva', CHtml::listData(CondicionesIva::model()->findAll(
                                    array(
                                        'condition' => 'activo = true',
                                        'order' => 'descripcion')), 'idcondicion_iva', 'descripcion'), array('empty' => 'Seleccione'));
            ?>
            <?php echo $form->error($model, 'idcondicion_iva'); ?>
            </td>

        </tr>

        <tr>
            <td class="coltitulos"><?php echo $form->labelEx($model, 'idarchivo_logo'); ?></td>
            <td>
                <?php echo $form->fileField($model, 'logo'); ?>
                <div class="errores"><?php echo $form->error($model, 'logo'); ?></div>
            </td>
            <td class="coltitulos"><?php echo $form->labelEx($model, 'envia_mails_seguimiento'); ?></td>
            <td>
                <?php echo $form->checkBox($model, 'envia_mails_seguimiento'); ?>
                <?php echo $form->error($model, 'envia_mails_seguimiento'); ?>
            </td>

        </tr>
    </table>

</div>