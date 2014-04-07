<?php

/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs = array(
    'Clientes' => array('admin'),
    'Manage',
);

echo CHtml::link('Agregar cliente', $this->createAbsoluteUrl('clientes/create'));
?>
<?php

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
        /*
          'telefono',
          'envia_mails_seguimiento',
          'localidad',
          'codigo_postal',
          'idcondicion_iva',
          'idarchivo_logo',
          'idprovincia',
          'fecha_alta',
          'fecha_ultima_cotizacion_aprobada',
          'recontacar_cotizaciones',
          'activo',
         */
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
