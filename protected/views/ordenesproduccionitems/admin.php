<?php
/* @var $this OrdenesproduccionitemsController */
/* @var $model OrdenesProduccionItems */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ordenes-produccion-items-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1> Items de la Orden de Produccion Nro <?php echo $modelOrden->idorden_produccion; ?></h1>
<?php
echo CHtml::link('Nuevo Item', $this->createAbsoluteUrl('ordenesproduccionitems/create',array('id'=>$modelOrden->idorden_produccion)));
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-produccion-items-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
		'cantidad',
		'importe',
		'nota',
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',
           
            'buttons' => array(
                		
				'delete' => array(                    
					'label' => 'Borrar',					             
				),
            )
        ),
	),
));

echo CHtml::link('Finalizar Orden', $this->createAbsoluteUrl('ordenesproduccion/finalizar', array('id' => $modelOrden->idorden_produccion)));
 ?>

