<?php

$model->idimpresion_color = $idimpresion_color;
$modelInsert->idimpresion_color = $idimpresion_color;
echo $this->renderPartial('_form_precios', array('model' => $modelInsert));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'impresiones-tipos-colores-precios-unitarios-grid',
    'dataProvider' => $model->search(),
    /* 'filter'=>$model, */
    'ajaxUpdate'=> false,
    'columns' => array(
        'cantidad',
        'precio_unitario',
        /*
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => "js:'El precio  será borrado! Continuar?'",
            'template' => '{delete}',
            'buttons' => array(
                'delete' => array(
                    'label' => 'Borrar Precio unitario',
                    'url' => 'Yii::app()->createUrl("impresionestipos/deleteprecio", array("id"=>$data->idimpresion_tipo_color_precio_unitario))',
                    'imageUrl' => $this->createUrl('../../images/silk/money_delete.png'),
                )
            )
        ),
    ),
));
?>