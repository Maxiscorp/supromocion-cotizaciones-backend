<?php
/* @var $this OrdenesProduccionController */
/* @var $model OrdenesProduccion */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ordenes-produccion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

echo CHtml::link('Nueva Orden', $this->createAbsoluteUrl('ordenesproduccion/create'));
?><div class="search-form" >
    <h2>Busqueda de Ordenes de produccion</h2>
    <?php
	/*
    $this->renderPartial('_search', array(
        'model' => $model,
    ));*/
    ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-produccion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name' => 'razon_social',
            'header' => 'Razon Social',
            'type' => 'raw',
            'value' => '$data->idcliente0->razon_social',
        ),     
		
        array(
            'name' => 'entrega_idprovincia',
            'header' => 'Provincia',
            'type' => 'raw',
            'value' => '$data->entregaIdprovincia->descripcion',
        ),
		'entrega_localidad',
		'entrega_codigo_postal',
		'porcentaje_facturado',
        array(
            'name' => 'idorden_estado',
            'header' => 'Estado',
            'type' => 'raw',
            'value' => '$data->idordenEstado->descripcion',
        ),
		/*
		'entrega_localidad',
		'entrega_codigo_postal',
		'fecha_ingreso',
		'activo',
		*/
        array(
            'class' => 'CButtonColumn',
            'template' => '{continuar}',
           
            'buttons' => array(
                
                'continuar' => array(
                    'label' => 'Agregar items',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil_add.png'),					
					'visible'=>'$data->idorden_estado==1',
                    'url' => '$this->grid->controller->createUrl("ordenesproduccionitems/admin/$data->idorden_produccion")',
                ),				
				/*'pdf' => array(                    
					'label' => 'Ver PDF',					
					'options'=>array("target"=>"_blank"),                    
					'url' => '$this->grid->controller->createUrl("cotizaciones/pdf/$data->idcotizacion")',					
					'visible'=>'$data->idcotizacion_estado==2',                    
					'imageUrl' => $this->createUrl('../../images/silk/page_white_acrobat.png'),                
				),*/
            )
        ),
	),
)); ?>
