<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs = array(
    'Clientes' => array('index'),
    $model->idcliente,
);
?>

<h1>Numero de cliente: <?php echo $model->idcliente; ?></h1>

<table class="tablaform">

    <tr>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('cuit'); ?>
        </td>
        <td>
            <?php echo $model->cuit; ?>
        </td>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('contacto'); ?>
        </td>
        <td>
            <?php echo $model->contacto; ?>
        </td>
    </tr>
    <tr>

        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('razon_social'); ?>
        </td>
        <td>
            <?php echo $model->razon_social; ?>
        </td>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('nombre_comercial'); ?>
        </td>
        <td>
            <?php echo $model->nombre_comercial; ?>
        </td>

    </tr>
    <tr>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('email'); ?>
        </td>
        <td>
            <?php echo $model->email; ?>
        </td>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('telefono'); ?>
        </td>
        <td>
            <?php echo $model->telefono; ?>
        </td>
    </tr>

    <tr>

        <td class="coltitulos">

            <?php echo $model->getAttributeLabel('idprovincia'); ?>
        </td>
        <td>
            <?php echo $model->idprovincia0->descripcion; ?>
        </td>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('localidad'); ?>
        </td>
        <td>
            <?php echo $model->localidad; ?>
        </td>

    </tr>
    <tr>

        <td class="coltitulos">

            <?php echo $model->getAttributeLabel('codigo_postal'); ?>
        </td>
        <td>
            <?php echo $model->codigo_postal; ?>
        </td>
        <td class="coltitulos">
            <?php echo $model->getAttributeLabel('idcondicion_iva'); ?>
        </td>
        <td>
            <?php echo $model->idcondicionIva->descripcion; ?>
        </td>

    </tr>
</table>
<table class="tablaagentesretencion">
    <?php
    if($model->idarchivo_logo>0){
    ?>
    <tr>
        <td class="coltitulos">

            <?php echo $model->getAttributeLabel('idarchivo_logo'); ?>
        </td>
        <td>
            <img width="200px;height: 300px;" src="http://archivos.supromocion.sysnetic.com.ar/supromocion/<?php echo $model->idarchivoLogo->ruta_archivo; ?>" />
        </td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td class="coltitulos">

            <?php echo $model->getAttributeLabel('envia_mails_seguimiento'); ?>
        </td>
        <td>
            <?php
            if ($model->envia_mails_seguimiento == "1") {
                echo "SI";
            } else {
                echo "NO";
            }
            ?>
        </td>

    </tr>
</table>
<table class="tablaagentesretencion">
    <caption>Agentes de retencion</caption>
    <?php
    foreach ($agentes as $agente) {
        ?>
        <tr>
            <td class="coltitulos"><?php echo $agente->idagenteRetencion->descripcion; ?></td>
            
        </tr>
        <?php
    }
    ?>
</table>