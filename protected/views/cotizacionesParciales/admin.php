<?php
/* @var $this CotizacionesParcialesController */
/* @var $model CotizacionesParciales */
?>

<h1>Detalle de cotizacion Nro. <?php echo $model->idcotizacion?></h1>

<?php
echo CHtml::link('nueva cotizacion parcial', $this->createAbsoluteUrl('cotizacionesparciales/paso1',array('id'=>$model->idcotizacion)));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cotizaciones-parciales-grid',
    'dataProvider' => $model->search(),
    //'filter' => $model,
    'columns' => array(
        array(
            'name' => 'idcotizacion',
            'header' => 'Nro de cotizacion',
            'type' => 'raw',
            'value' => '$data->idcotizacion',
        ),
        array(
            'name' => 'idproducto',
            'header' => 'Producto',
            'type' => 'raw',
            'value' => '$data->idproducto0->nombre',
        ),
        array(
            'header' => 'Codigo producto',
            'type' => 'raw',
            'value' => '$data->idproducto0->codigo_producto_interno',
        ),
        array(
            'header' => 'Importe',
            'type' => 'raw',
            'value' => '$data->importe_producto+$data->importe_impresion',
        ),
        
        array(
            'header' => 'Tipo de impresion',
            'type' => 'raw',
            'value' => '$data->idimpresionTipo->descripcion',
        ),
        array(
            'header' => 'Cantidad colores',
            'type' => 'raw',
            'value' => '$data->idimpresionColores->descripcion',
        ),
        array(
            'header' => 'Cantidad fases',
            'type' => 'raw',
            'value' => '$data->idimpresionFases->descripcion',
        ),
        
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
