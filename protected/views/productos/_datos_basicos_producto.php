

        <tr>
            <td class="coltitulos">
                <?php echo $model->getAttributeLabel('nombre'); ?>
            </td>
            <td>
                <?php echo $model->nombre; ?>
            </td>
            <td class="coltitulos">
                <?php echo $model->getAttributeLabel('idproducto_tipo'); ?>
            </td>
            <td>
                <?php echo $model->idproductoTipo->descripcion; ?>
            </td>
        </tr>
        <tr>

            <td class="coltitulos">
                <?php echo $model->getAttributeLabel('codigo_producto_interno'); ?>
            </td>
            <td>
                <?php echo $model->codigo_producto_interno; ?>
            </td>
            <td class="coltitulos">
                <?php echo $model->getAttributeLabel('codigo_producto_proveedor'); ?>
            </td>
            <td>
                <?php echo $model->codigo_producto_proveedor; ?>
            </td>

        </tr>