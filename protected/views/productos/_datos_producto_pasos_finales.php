<?php
echo $this->renderPartial('_datos_basicos_producto', array('model' => $model,
));
?>
        <tr>

            <td class="coltitulos">
                <?php echo $model->getAttributeLabel('idmoneda'); ?>
            </td>
            <td>
                <?php echo $model->idmoneda0->descripcion; ?>
            </td>
            <td class="coltitulos">
                <?php echo $model->getAttributeLabel('cantidad_imagenes'); ?>
            </td>
            <td>
                <?php echo $model->CantidadImagenes; ?>
            </td>

        </tr>