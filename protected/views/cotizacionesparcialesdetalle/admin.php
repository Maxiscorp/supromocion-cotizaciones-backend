<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */

$this->breadcrumbs = array(
    'Cotizaciones Parciales Detalles' => array('index'),
    'Manage',
);
?>

<h1>Detalles de precio unitario por cantidad de la cotizacion</h1>
<?php
if (sizeof(($model->search()->data)) > 3) {
    echo "Esta cotizacion parcial ya tiene 4 cantidades ingresadas, que es el maximo posible.";
} else {
    echo CHtml::link('Agregar cantidades al producto', $this->createAbsoluteUrl('cotizacionesparcialesdetalle/create', array('id' => $model->idcotizacion_parcial)));
}
?>
<br />

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cotizaciones-parciales-detalle-grid',
    'dataProvider' => $model->search(),
    //'filter'=>$model,
    'columns' => array(
        'cantidad',
        'importe_impresion',
        'importe_producto',
        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => "js:'la cantidad asignada será borrada, continuar?'",
            'template' => '{delete}',
            'afterDelete' => 'location.reload()',
            'buttons' => array
                (
                'delete' => array(
                    'label' => 'Borrar detalle',
                    'imageUrl' => $this->createUrl('../../images/silk/money_delete.png'),
                ),
            )
        ),
    ),
));
echo CHtml::link('Finalizar detalles de cantidades y precio unitario', $this->createAbsoluteUrl('cotizacionesparciales/admin', array('id' => $model->idcotizacionParcial->idcotizacion)));
?>
