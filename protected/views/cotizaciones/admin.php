<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */

echo CHtml::link('Nueva cotizacion', $this->createAbsoluteUrl('cotizaciones/create'));
?>

<div class="search-form" >
    <h2>Busqueda de cotizaciones</h2>
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cotizaciones-grid',
    'dataProvider' => $model->search(),
    //'filter' => $model,
    'columns' => array(
        array(
            'name' => 'razon_social',
            'header' => 'Razon Social',
            'type' => 'raw',
            'value' => '$data->idcliente0->razon_social',
        ),     
        array(
            'header' => 'Importe',
            'type' => 'raw',
            'value' => '$data->importeSum',
        ),
        array(
            'name' => 'idmedio_pago',
            'header' => 'Medio Pago',
            'type' => 'raw',
            'value' => '$data->idmedioPago->descripcion',
        ),
        array(
            'name' => 'idoperador',
            'header' => 'Operador',
            'type' => 'raw',
            'value' => '$data->idoperador0->nombre." ".$data->idoperador0->apellido',
        ),
        array(
            'name' => 'condiciones_contratacion',
            'header' => 'Condiciones',
            'type' => 'raw',
            'value' => '$data->condiciones_contratacion',
        ),
        array(
            'name' => 'idcotizacion_estado',
            'header' => 'Estado',
            'type' => 'raw',
            'value' => '$data->idcotizacionEstado->descripcion',
        ),
        /*
          'fecha_ingreso',
          'fecha_vencimiento',
          'fecha_recontacto',
          'fecha_recontacto_recordatorio',
          'recontactar',
          'condiciones_contratacion',
          'observaciones',
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
