<?php

/* @var $cliente Clientes */

/* @var $model Cotizaciones */

/* @var $cotizacionparcial CotizacionesParciales */

?><html>

    <head>

        <title>

            PDF de cotización Nro. lala

        </title>

    </head>

    <body style="height: 100%;">

        <div style="height: 35px;">

        </div>

        <div style="text-align: center; margin-left: auto;margin-right: auto;">

            <img width="256" height="115" src="http://supromocion.sysnetic.com.ar/images/logo_pdf.png" />

        </div>

        <div id="datoscliente" style="text-align:left;">

            <table >

                <tr>

                    <td>

                        Cliente:

                    </td>

                    <td>

                        <?php echo $cliente->razon_social; ?>

                    </td>

                </tr>

                <tr>

                    <td>

                        Atención:

                    </td>

                    <td>

                        ?

                    </td>

                </tr>

                <tr>

                    <td>

                        E-mail:

                    </td>

                    <td>

                        <?php

                        echo $cliente->email;

                        ?>

                    </td>

                </tr>

                <tr>

                    <td>

                        Fecha:

                    </td>

                    <td>

                        <?php

                        echo date('Y-m-d');

                        ?>

                    </td>

                </tr>

            </table>

        </div>

        <div style="text-align: right;font-size: 120%;font-weight: bold;">

            Presupuesto N: <?php echo $model->idcotizacion; ?>

        </div>

        <?php

        $cotizacionesparciales = CotizacionesParciales::model()->findAllByAttributes(array('idcotizacion' => $model->idcotizacion, 'activo' => 1));

        foreach ($cotizacionesparciales as $cotizacionparcial) {

            ?>



            <table border="0.5" width="900"  cellpadding="0" cellspacing="0" >

                <tr>

                    <td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                        PRODUCTO:

                    </td>

                    <td width="470" style="vertical-align: middle;text-align: center;">

                        <img width="100" height="100" src="<?php echo Yii::getPathOfAlias('archivos') . $cotizacionparcial->idproducto0->productosImagenes[0]->idarchivo0->ruta_archivo; ?>" />

                    </td>



                </tr>

                <tr>

                    <td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                        CÓDIGO DE PRODUCTO:

                    </td>

                    <td width="470" height="25" style="vertical-align: middle;text-align: left;">

                        &nbsp;<?php echo $cotizacionparcial->idproducto0->codigo_producto_interno; ?>

                    </td>



                </tr>

                <tr>

                    <td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                        DESCRIPCIÓN:

                    </td>

                    <td width="470" height="25" style="vertical-align: middle;text-align: left;">

                        &nbsp;<?php echo $cotizacionparcial->idproducto0->descripcion; ?>

                    </td>



                </tr>

                <tr>

                    <td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                        SISTEMA DE IMPRESIÓN:

                    </td>

                    <td width="470" height="25" style="vertical-align: middle;text-align: left;">

                        &nbsp; <?php echo $cotizacionparcial->idimpresionTipo->descripcion; ?>

                    </td>



                </tr>

                <tr>

                    <td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                        FASES DE IMPRESIÓN:

                    </td>

                    <td width="470" height="25" style="vertical-align: middle;text-align: left;">

                        &nbsp; <?php echo $cotizacionparcial->idimpresionFases->descripcion; ?>

                    </td>



                </tr>

                <tr>

                    <td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                        CANTIDAD DE COLORES:

                    </td>

                    <td width="470" height="25" style="vertical-align: middle;text-align: left;">

                        &nbsp;<?php echo $cotizacionparcial->idimpresionColores->descripcion; ?>

                    </td>



                </tr>

                <?php

                $detallescantidad = CotizacionesParcialesDetalle::model()->findAllByAttributes(array('idcotizacion_parcial' => $cotizacionparcial->idcotizacion_parcial, 'activo' => 1));

                foreach ($detallescantidad as $detalle) {

                    ?>

                    <tr>

                        <td td width="250" style="background-color: #DF8302;vertical-align: middle;text-align: center;font-weight: bold;font-size:80%;color:white;">

                            COSTO UNITARIO POR <?php echo $detalle->cantidad; ?>

                        </td>

                        <td width="470" height="25" style="vertical-align: middle;text-align: left;">

                            &nbsp;<?php

                            $importe = $detalle->importe_producto + $detalle->importe_impresion;

                            echo "$   " . number_format($importe, 2, '.', '') . "-";

                            ?>

                        </td>

                    </tr>

                    <?php

                }

                ?>

            </table>

            <?php

        }

        ?>

        <?php 

        if(sizeof($cotizacionesparciales)==1){

            ?>

        <div style="height:100px;"></div>

                <?php

        }

        ?>

        <div style="text-align:center;margin: auto auto; width: 220px;">

            <div style="width:220px;text-align:left;background-color: #DF8302;font-weight: bold;font-size:80%;color:white;height: 20px;vertical-align: middle;">

                &nbsp; CONDICIONES DE CONTRATACION  

            </div>



        </div>

        <p align="left">Los precios NO incluyen iva.<br />

            Valores expresados en pesos argentinos o U$S según detallado en la cotización<br />

            Fecha de entrega: sujeta a la confirmación del anticipo y aprobación de Fotomontaje.<br />

            Presupuesto válido por 7 días.<br />

            Entrega sin cargo en capital federal.<br /><br />

            Formas de pago: 50% a la contratación, saldo contra entrega.<br />

            <br /><br /><br />

            Cualquier consulta estamos a disposición.<br />

            Cordialmente,<br />

            <?php

            $operador = Operadores::model()->findByPk(YIi::app()->user->getState('idoperador'));

            echo $operador->nombre . " " . $operador->apellido . "<br />";

            echo $operador->email;

            ?>



        </p>

        <div style="height: 50px;">

            

        </div>

        <div style="text-align: center;font-size:120%;font-weight: bold;">

            Tel./Fax: (11) 5434-5663 / 6238<br />

            <a style="color:black;text-decoration: none;" href="http://www.supromocion.com.ar">

                www.supromocion.com.ar

            </a>

        </div>

        

            

            

            

    </body>

</html>