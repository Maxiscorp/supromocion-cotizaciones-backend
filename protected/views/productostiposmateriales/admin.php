<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */

$this->breadcrumbs = array(
    'Materiales de tipo de producto' => array('admin'),
    'Manage',
);

echo CHtml::link('Volver', $this->createAbsoluteUrl('productostipos/admin'));
?><h2>Agregar materiales al tipo de producto "<?php echo $model->idproductoTipo->descripcion; ?>"</h2>
<?php
echo $this->renderPartial('_form', array('model' => $model));
?>
<!--<h2>Materiales vinculados con el tipo de producto "<?php echo $model->idproductoTipo->descripcion; ?>":</h2>  -->  
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'productos-tipos-materiales-grid',
    'dataProvider' => $model->search(),
    //'filter'=>$model,
    'columns' => array(
        array(
            'name' => 'idmaterial',
            'type'=>'raw',
            'header' => 'Material',
            'htmlOptions'=>array('style' => 'text-align: center;'),
            'value' => '$data->idmaterial0->descripcion',
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}', 
            'buttons' => array
                (

             'delete' => array(
              'label' => 'Borrar material',
              'imageUrl' => $this->createUrl('../../images/silk/pencil_delete.png'),
              ) 
            )
        ),
    ),
));
?>
