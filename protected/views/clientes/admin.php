<?php

/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs = array(
    'Clientes' => array('admin'),
    'Manage',
);
?>
<h1>ABM Clientes</h1>
<?php
echo CHtml::link('Agregar cliente', $this->createAbsoluteUrl('clientes/create'));

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'clientes-grid',
    'dataProvider' => $model->search(),
    'template' => '{items}{pager}',
    'filter' => $model,
    'columns' => array(
        'idcliente',
        'cuit',
        'razon_social',
        'nombre_comercial',
        'contacto',
        'email',

        array(
            'class' => 'CButtonColumn',            
        'deleteConfirmation'=>"js:'El cliente '+$(this).parent().parent().children('razon_social').text()+' será borrado! Continuar?'",
            'template' => '{update}{delete}',
            'buttons' => array
                (
                'update' => array(
                    'label' => 'Editar cliente',
                    'imageUrl' => $this->createUrl('../../images/silk/user_edit.png'),
                ),
                'delete' => array(
                    'label' => 'Borrar Cliente',
                    'imageUrl' => $this->createUrl('../../images/silk/user_delete.png'),
                )
            )
        ),
    ),
));
?>