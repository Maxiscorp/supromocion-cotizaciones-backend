<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */

$this->breadcrumbs=array(
	'Ordenes'=>array('index'),
	'Create',
);

?>

<h1>Nueva Orden de producción</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>