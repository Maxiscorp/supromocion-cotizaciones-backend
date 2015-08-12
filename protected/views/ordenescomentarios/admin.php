<?php
/* @var $this OrdenesComentariosController */
/* @var $model OrdenesComentarios */
?>

<h2>Comentarios de la orden de producción con numero de prespuesto <b><?php echo $model->idorden0->nro_presupuesto; ?></b> </h2>
<?php
echo CHtml::link('Nuevo comentario', $this->createAbsoluteUrl('ordenescomentarios/create',array('id'=>$model->idorden)));
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-comentarios-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
        array(
        'name'=>'fecha',
        'header'=>'Fecha Orden',
        'value'=>'date("Y-m-d H:i:s",strtotime($data->fecha))',
    ),
		'comentario',
        array(
            'class' => 'CButtonColumn',
            'template' => '{delete}',

            'buttons' => array(

                'delete' => array(
                    'label' => 'Borrar comentario',
                    'url' => '$this->grid->controller->createUrl("ordenescomentarios/delete/$data->idorden_comentario")',
                    'imageUrl' => $this->createUrl('../../images/silk/delete.png'),
                ),
            )
        ),
	),
)); ?>
