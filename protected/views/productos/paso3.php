<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
    'Productos' => array('admin'),
    'Create',
);

?>

<h1>Agregar rangos de precio unitario al producto</h1>

<?php
echo $this->renderPartial('_formprecios', array(
    'model' => $modelPreciosUnitarios,
    
));
?>

<div class="info">

    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
    ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-precios-unitarios-grid',
	'dataProvider'=>$modelPreciosUnitarios->search(),
	//'filter'=>$modelPreciosUnitarios,
	'columns'=>array(
		'cantidad_desde',
		'cantidad_hasta',
		'precio_unitario',
		/*
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
