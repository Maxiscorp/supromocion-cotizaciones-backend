<?php
/* @var $this MaterialesController */
/* @var $model Materiales */
?>
<h1>ABM Materiales</h1>



<?php
echo CHtml::link('Agregar material', $this->createAbsoluteUrl('materiales/create'));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'materiales-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'template' => '{items}{pager}',
    'columns' => array(
        'idmaterial',
        'nombre',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}',/*{delete}*/
            'buttons' => array
                (
                'update' => array(
                    'label' => 'Editar nombre de material',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil.png'),
                ),
                /*'delete' => array(
                    'label' => 'Borrar material',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil_delete.png'),
                )*/
            )
        ),
    ),
));
?>
