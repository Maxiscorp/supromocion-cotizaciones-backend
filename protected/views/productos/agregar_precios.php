<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
    'Productos' => array('admin'),
    'Create',
);
?>
    <h2>
        <?php
        echo CHtml::link('Volver ', $this->createAbsoluteUrl('productos/admin'));
        ?>
    </h2>
<h2>Detalles del producto</h2>

<table class="tablaform">
    <?php
    echo $this->renderPartial('_datos_producto_pasos_finales', array('model' => $model,
    ));
    ?>

</table>

<h2>Agregar rangos de precio unitario al producto</h2>
<div class="info">

    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
    ?>
</div>
<?php
echo $this->renderPartial('_formprecios', array(
    'model' => $modelPrecioUnitario,
));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'productos-precios-unitarios-grid',
    'dataProvider' => $modelPreciosUnitarios->search(),
    //'filter'=>$modelPreciosUnitarios,
    'columns' => array(
        'cantidad_desde',
        'cantidad_hasta',
        'precio_unitario',
        /*
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => "js:'El precio unitario será borrado! Continuar?'",
            'template' => '{delete}',
            'buttons' => array
                (
                'delete' => array(
                    'label' => 'Borrar Precio',
                    'imageUrl' => $this->createUrl('../../images/silk/money_delete.png'),
                    'url' => '$this->grid->controller->createUrl("productos/deleteprecio/$data->idprecio_producto_unitario")',
                )
            )
        ),
    ),
));

?>