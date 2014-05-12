<?php
/* @var $this ImpresionesTiposController */
/* @var $model ImpresionesTipos */
?>
<h1>ABM Tipos de impresion</h1>
<?php
echo CHtml::link('Agregar Tipo de Impresion', $this->createAbsoluteUrl('impresionestipos/create'));

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'impresiones-tipos-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'template' => '{items}{pager}',
    'columns' => array(
        /* 'idimpresion_tipo', */
        'descripcion',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{precios}',
            'buttons' => array
                (
                'update' => array(
                    'label' => 'Editar tipo de impresion',
                    'imageUrl' => $this->createUrl('../../images/silk/printer.png'),
                ),
             'precios' => array(
              'label' => 'Agregar precios por cantidad y colores',
              'imageUrl' => $this->createUrl('../../images/silk/money_add.png'),
                 'url' => 'Yii::app()->createUrl("impresionestipos/colores", array("id"=>$data->idimpresion_tipo))',
                    
              ) 
            )
        ),
    ),
));
?>
