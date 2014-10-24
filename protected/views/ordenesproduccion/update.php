<?php
/* @var $this OrdenesProduccionController */
/* @var $model OrdenesProduccion */

$this->breadcrumbs=array(
	'Ordenes Produccions'=>array('index'),
	$model->idorden_produccion=>array('view','id'=>$model->idorden_produccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenesProduccion', 'url'=>array('index')),
	array('label'=>'Create OrdenesProduccion', 'url'=>array('create')),
	array('label'=>'View OrdenesProduccion', 'url'=>array('view', 'id'=>$model->idorden_produccion)),
	array('label'=>'Manage OrdenesProduccion', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesProduccion <?php echo $model->idorden_produccion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>