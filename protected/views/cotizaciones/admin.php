<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */
echo CHtml::link('Nueva cotizacion', $this->createAbsoluteUrl('cotizaciones/create'));
?>

<div class="search-form" >
    <h2>Busqueda de cotizaciones</h2>
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cotizaciones-grid',
    'dataProvider' => $model->search(),
    //'filter' => $model,
    'columns' => array(
        array(
            'name' => 'razon_social',
            'header' => 'Razon Social',
            'type' => 'raw',
            'value' => '$data->idcliente0->razon_social',
        ),     
        array(
            'name' => 'idmedio_pago',
            'header' => 'Medio Pago',
            'type' => 'raw',
            'value' => '$data->idmedioPago->descripcion',
        ),
        array(
            'name' => 'idoperador',
            'header' => 'Operador',
            'type' => 'raw',
            'value' => '$data->idoperador0->nombre." ".$data->idoperador0->apellido',
        ),
        array(
            'name' => 'condiciones_contratacion',
            'header' => 'Condiciones',
            'type' => 'raw',
            'value' => '$data->condiciones_contratacion',
        ),
        array(
            'name' => 'idcotizacion_estado',
            'header' => 'Estado',
            'type' => 'raw',
            'value' => '$data->idcotizacionEstado->descripcion',
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{continuar}',
           
            'buttons' => array(
                
                'continuar' => array(
                    'label' => 'Agregar cotizaciones parciales y/o continuar',
                    'imageUrl' => $this->createUrl('../../images/silk/pencil_add.png'),					
					'visible'=>'$data->idcotizacion_estado==3',
                    'url' => '$this->grid->controller->createUrl("cotizacionesparciales/admin/$data->idcotizacion")',
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
));
?>
