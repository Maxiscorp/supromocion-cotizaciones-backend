<?php
/* @var $this CotizacionesParcialesController */
/* @var $model CotizacionesParciales */
?>

<h1>Productos de la cotizacion Nro. <?php echo $model->idcotizacion ?></h1>

<?php
echo CHtml::link('Agregar producto a la cotizacion', $this->createAbsoluteUrl('cotizacionesparciales/paso1', array('id' => $model->idcotizacion)));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cotizaciones-parciales-grid',
    'dataProvider' => $model->search(),
    //'filter' => $model,
    'columns' => array(
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
            'deleteConfirmation' => "js:'el producto será borrado, continuar?'",
            'template' => '{delete}{cantidad}',
            'buttons' => array
                (
                'delete' => array(
                    'label' => 'Borrar Producto',
                    'imageUrl' => $this->createUrl('../../images/silk/package_delete.png'),
                ),
                'cantidad' => array(
                    'label' => 'Agregar detalle de cantidad - precio unitario',
                    'imageUrl' => $this->createUrl('../../images/silk/money_add.png'),
                    'url' => '$this->grid->controller->createUrl("cotizacionesparcialesdetalle/admin/$data->idcotizacion_parcial")',
                ),
            )
        ),
    ),
));
echo CHtml::link('Finalizar cotizacion', $this->createAbsoluteUrl('cotizaciones/pdf', array('id' => $model->idcotizacion)));

?>
