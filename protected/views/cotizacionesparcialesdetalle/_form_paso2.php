<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */
/* @var $form CActiveForm */
?>

<div class="form">
    <?php
    $error = false;
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cotizaciones-parciales-form',
        'enableAjaxValidation' => false,
    ));
    /* print_r($modelColImpPrecioUnitario); */
    $data_in = "http://ws.geeklab.com.ar/dolar/get-dolar-json.php";
    $data_json = @file_get_contents($data_in);
    if (strlen($data_json) > 0) {
        $data_out = json_decode($data_json, true);

        if (is_array($data_out)) {
            if (isset($data_out['libre']))
                $dolar = $data_out['libre'];
            /* if(isset($data_out['blue'])) print "Blue: ".$data_out['blue']."<br>\n"; */

            $dolarconrecargo = $dolar + 0.1;
            ?>
            <table class="tablaform">

                <tr>
                    <td class="coltitulos">

                        <?php echo $form->labelEx($model, 'idproducto'); ?>
                    </td>
                    <td>
                        <?php echo $model->idcotizacionParcial->idproducto0->nombre; ?>
                    </td>
                    <td class="coltitulos">

                        <?php echo $form->labelEx($model, 'idimpresion_colores'); ?>
                    </td>
                    <td>
                        <?php echo $model->idcotizacionParcial->idimpresionColores->descripcion; ?>
                    </td>
                </tr>
                <tr>
                    <td class="coltitulos">

                        <?php echo $form->labelEx($model, 'idimpresion_tipo'); ?>
                    </td>
                    <td>
                        <?php echo $model->idcotizacionParcial->idimpresionTipo->descripcion; ?>
                    </td>
                    <td class="coltitulos">

                        <?php echo $form->labelEx($model, 'idimpresion_fases'); ?>
                    </td>
                    <td>
                        <?php echo $model->idcotizacionParcial->idimpresionFases->descripcion; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="coltitulos">

                        <?php echo $form->labelEx($model, 'cantidad'); ?>
                    </td>
                    <td colspan="2">

                        <?php echo $model->cantidad; ?>
                    </td>
                </tr>

            </table>
            <?php
            echo $form->hiddenField($model, 'idcotizacion_parcial', array('value' => $model->idcotizacion_parcial));
            ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

            <?php echo $form->errorSummary($model); ?>
            <table class="tablaform">
                <tr>
                    <th colspan="2">
                        Precio unitario del producto
                    </th>

                </tr>
                <tr>

                    <?php
                    $precio_producto = 0;
                    if ($modelPrecioUnitario) {
                        ?>
                        <td >
                            <?php
                            if ($modelPrecioUnitario->idproducto0->idmoneda == 1) {
                                $precio_producto =  $modelPrecioUnitario->precio_unitario * $dolarconrecargo;
                            } else {

                                $precio_producto =  $modelPrecioUnitario->precio_unitario;
                            }
                            echo $form->textField($model, 'importe_producto', array('size' => 15, 'maxlength' => 15, 'value' => number_format($precio_producto, 2, '.', '')));
                            ?>
                        </td>
                        <td class="coltitulos"><?php
                            if ($modelPrecioUnitario->idproducto0->idmoneda == 1) {
                                echo "Moneda: " . $modelPrecioUnitario->idproducto0->idmoneda0->simbolo . "|  Cotizacion actual:" . $dolar . "(+10 centavos)=" . $dolarconrecargo . "|  Precio por unidad:" . $modelPrecioUnitario->precio_unitario;
                            } else {
                                echo "Moneda: " . $modelPrecioUnitario->idproducto0->idmoneda0->simbolo . "|  Cotizacion actual:1|  Precio por unidad:" . $modelPrecioUnitario->precio_unitario;
                            }
                        } else {
                            ?>
                        <td colspan="2">
                            <?php
                            echo "por favor, " . CHtml::link('  verifique', array('/productos/agregarprecios/' . $model->idcotizacionParcial->idproducto), array('target' => '_blank')) . " que la cantidad " . $model->cantidad . " o menor esta configurada con un precio unitario dentro del producto.";
                            $error = true;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        Precio unitario de la impresion
                    </th>
                </tr>
                <tr>
                    <?php
                    if ($modelColImpPrecioUnitario) {
                        ?>
                        <td>
                            <?php
                            $precio_impresion = $modelColImpPrecioUnitario->precio_unitario  * $model->idcotizacionParcial->idimpresion_fases;

                            echo $form->textField($model, 'importe_impresion', array('size' => 15, 'maxlength' => 15, 'value' => number_format($precio_impresion, 2, '.', '')));
                            ?>
                        </td>
                        <td class="coltitulos">
                            <?php
                            echo "Precio por unidad: " . $modelColImpPrecioUnitario->precio_unitario;
                        } else {
                            ?>
                        <td colspan="2">
                            <?php
                            echo "por favor, " . CHtml::link('  verifique', array('/impresionestipos/colores/' . $model->idcotizacionParcial->idimpresion_tipo . '#' . $model->idcotizacionParcial->idimpresion_colores), array('target' => '_blank')) . " que la cantidad " . $model->cantidad . " o menor, esta configurada con un precio unitario dentro del tipo de impresion " . $model->idcotizacionParcial->idimpresionTipo->descripcion . " y con " . $model->idcotizacionParcial->idimpresionColores->descripcion . " colores. Luego Refresque esta pagina";
                            $error = true;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">

                        <?php
                        if (!$error) {
                            echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save');
                        }
                        ?>
                    </td>
                </tr>
            </table>

            <?php $this->endWidget(); ?>
            <?php
        } else {
            echo "el servicio de cotizacion de dolares está caido! enviar mail a maximilianotejada@gmail.com";
        }
    } else {
        echo "el servicio de cotizacion de dolares está caido! enviar mail a maximilianotejada@gmail.com";
    }
    ?>
</div><!-- form -->