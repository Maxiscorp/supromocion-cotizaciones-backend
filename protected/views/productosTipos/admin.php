<?php
/* @var $this ProductosTiposController */
/* @var $model ProductosTipos */

$this->breadcrumbs=array(
	'Productos Tiposes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProductosTipos', 'url'=>array('index')),
	array('label'=>'Create ProductosTipos', 'url'=>array('create')),
);

     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-tipos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descripcion',
        array(
            'class' => 'CButtonColumn',
            'template' => '{abm_material}',/*{delete}*/
            'buttons' => array
                (
                
                'abm_material' => array(
                    'label' => 'Agregar materiales al producto',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil.png'),
                    'url' => $this->createUrl('../../images/silk/pencil.png'),
                ),
            )
        ),
	),
)); ?>