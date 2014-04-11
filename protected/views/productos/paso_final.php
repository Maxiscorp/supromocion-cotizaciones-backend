<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
    'Productos' => array('admin'),
    'Create',
);
?>
<h1>
    Paso final de alta de producto
</h1>
<?php
echo CHtml::link('Volver al alta de precios unitarios ', $this->createAbsoluteUrl('productos/paso3/' . $model->idproducto));
?>
<h2>Detalles del producto</h2>

<table class="tablaform">
    <?php
    echo $this->renderPartial('_datos_producto_pasos_finales', array('model' => $model,
    ));
    ?>

</table>

<h2>Agregar materiales al producto</h2>
<?php
echo $this->renderPartial('_formmateriales', array(
    'model' => $modelProductoMaterial,
    'modelProductosTiposMateriales' => $modelProductosTiposMateriales,
));
?>

<div class="info">

    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
    ?>
</div>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'productos-precios-unitarios-grid',
    'dataProvider' => $modelProductosMateriales->search(),
    'filter' => $modelProductosMateriales,
    'columns' => array(
        'idmaterial0.descripcion',
        /*
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => "js:'El material seleccionado será borrado! Continuar?'",
            'template' => '{delete}',
            'buttons' => array
                (
                'delete' => array(
                    'label' => 'Borrar Material',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil_delete.png'),
                    'url' => '$this->grid->controller->createUrl("productos/deletematerial/$data->idproducto_material")',
                )
            )
        ),
    ),
));
?>
<div style="text-align:right;">
<h3>
    <?php
    echo CHtml::link('Finalizar ', $this->createAbsoluteUrl('productos/admin'));
    ?>
</h3>
</div>
