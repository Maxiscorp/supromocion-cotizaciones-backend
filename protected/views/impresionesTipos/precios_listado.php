<?php
$model->idimpresion_color=$idimpresion_color;
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'impresiones-tipos-colores-precios-unitarios-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
		'cantidad',
		'precio_unitario',
		/*
		'activo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>