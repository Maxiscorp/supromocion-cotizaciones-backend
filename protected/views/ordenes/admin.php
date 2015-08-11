<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */
?>
<div class="search-form" >
    <h2>Busqueda de Ordenes de producción</h2>
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
        array(
            'name'=>'idcliente',
            'header'=>'Cliente',
            'value'=>'$data->idcliente0->razon_social',
        ),
        array(
            'name'=>'nro_presupuesto',
            'header'=>'Nro de presupuesto',
            'value'=>'$data->nro_presupuesto',
        ),
        array(
            'name'=>'fecha',
            'header'=>'Fecha Orden',
            'value'=>'date("d/m/Y",strtotime($data->fecha))',
        ),
        array(
            'name'=>'proveedor',
            'header'=>'Proveedor',
            'value'=>'$data->proveedor',
        ),
		'lugar_entrega',
		/*
		'activo',
		'entrega_idprovincia',
		'entrega_localidad',
		'entrega_codigo_postal',
		'porcentaje_facturado',
		'comision_operador',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
