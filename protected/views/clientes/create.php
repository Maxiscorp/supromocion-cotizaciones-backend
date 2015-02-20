<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

?>

<h1>Create Clientes</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model,
            'modelAgenteGanancias' => $modelAgenteGanancias,
            'modelAgenteIIBB' => $modelAgenteIIBB,
            'modelAgenteIVA' => $modelAgenteIVA)); ?>
