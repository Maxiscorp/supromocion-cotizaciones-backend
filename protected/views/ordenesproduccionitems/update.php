<?php
/* @var $this OrdenesproduccionitemsController */
/* @var $model OrdenesProduccionItems */

$this->breadcrumbs=array(
	'Ordenes Produccion Items'=>array('index'),
	$model->idorden_produccion_item=>array('view','id'=>$model->idorden_produccion_item),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenesProduccionItems', 'url'=>array('index')),
	array('label'=>'Create OrdenesProduccionItems', 'url'=>array('create')),
	array('label'=>'View OrdenesProduccionItems', 'url'=>array('view', 'id'=>$model->idorden_produccion_item)),
	array('label'=>'Manage OrdenesProduccionItems', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesProduccionItems <?php echo $model->idorden_produccion_item; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>