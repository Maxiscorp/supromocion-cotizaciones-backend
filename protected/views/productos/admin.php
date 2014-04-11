<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
    'Productos' => array('admin'),
    'Manage',
);
?>

<h1>ABM Productos</h1>
<?php
echo CHtml::link('Nuevo producto', $this->createAbsoluteUrl('productos/create'));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'productos-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'nombre',
            'value' => '$data->nombre',
            'htmlOptions' => array('width' => '60px'),
        ),
        array(
            'name' => 'codigo_producto_interno',
            'value' => '$data->codigo_producto_interno',
            'htmlOptions' => array('width' => '60px'),
        ),
        array(
            'name' => 'codigo_producto_proveedor',
            'value' => '$data->codigo_producto_proveedor',
            'htmlOptions' => array('width' => '60px'),
        ),
        array(
            'name' => 'idproducto_tipo',
            'value' => '$data->idproductoTipo->descripcion',
            'htmlOptions' => array('width' => '90px'),
        ),
        array(
            'name' => 'idmoneda',
            'value' => '$data->idmoneda0->descripcion',
            'htmlOptions' => array('width' => '50px'),
        ),
        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => "js:'El producto seleccionado será borrado! Continuar?'",
            'template' => '{add_materiales}{add_precios}{add_image}{update}{delete}',
            
            'htmlOptions' => array('width' => '100px','style'=>'margin-left:0.6em;'),
            'buttons' => array
                (
                'delete' => array(
                    'label' => 'Borrar producto',
                    'imageUrl' => $this->createUrl('../../images/silk/package_delete.png'),
                    'url' => '$this->grid->controller->createUrl("productos/delete/$data->idproducto")',
                ),
                'update' => array(
                    'label' => 'Editar datos basicos producto',
                    'imageUrl' => $this->createUrl('../../images/silk/package_go.png'),
                    'url' => '$this->grid->controller->createUrl("productos/update/$data->idproducto")',
                ),
                'add_image' => array(
                    'label' => 'Agregar imagenes al producto',
                    'imageUrl' => $this->createUrl('../../images/silk/image_add.png'),
                    'url' => '$this->grid->controller->createUrl("productos/agregarimagenes/$data->idproducto")',
                ),
                'add_precios' => array(
                    'label' => 'Editar precios unitarios del producto',
                    'imageUrl' => $this->createUrl('../../images/silk/money_add.png'),
                    'url' => '$this->grid->controller->createUrl("productos/agregarprecios/$data->idproducto")',
                ),
                'add_materiales' => array(
                    'label' => 'Agregar materiales al producto',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil_add.png'),
                    'url' => '$this->grid->controller->createUrl("productos/agregarmateriales/$data->idproducto")',
                ),
            )
        ),
    ),
));
?>
