<?php
/* @var $this CotizacionesController */
/* @var $model Cotizaciones */

echo CHtml::link('Nueva cotizacion', $this->createAbsoluteUrl('cotizaciones/create'));
?>

<div class="search-form" >
    <h2>Busqueda de cotizaciones</h2>
    <?php
    
      $this->renderPartial('_search',array(
      'model'=>$model,
      ));
     
    ?>
</div><!-- search-form -->
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cotizaciones-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'idcotizacion',
        'idarchivo_pdf',
        'idcliente',
        'idoperador',
        'idcotizacion_estado',
        'idmedio_pago',
        /*
          'fecha_ingreso',
          'fecha_vencimiento',
          'fecha_recontacto',
          'fecha_recontacto_recordatorio',
          'recontactar',
          'condiciones_contratacion',
          'observaciones',
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
