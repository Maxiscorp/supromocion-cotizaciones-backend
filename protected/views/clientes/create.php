<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>Create Clientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelArchivo'=>$modelArchivo,
            'modelAgenteGanancias' => $modelAgenteGanancias,
            'modelAgenteIIBB' => $modelAgenteIIBB,
            'modelAgenteIVA' => $modelAgenteIVA)); ?>