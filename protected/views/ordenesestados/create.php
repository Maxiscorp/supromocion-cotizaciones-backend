<?php
/* @var $this OrdenesEstadosController */
/* @var $model OrdenesEstados */

$this->breadcrumbs=array(
	'Ordenes Estadoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrdenesEstados', 'url'=>array('index')),
	array('label'=>'Manage OrdenesEstados', 'url'=>array('admin')),
);
?>

<h1>Create OrdenesEstados</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>