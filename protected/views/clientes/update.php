<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idcliente=>array('view','id'=>$model->idcliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Create Clientes', 'url'=>array('create')),
	array('label'=>'View Clientes', 'url'=>array('view', 'id'=>$model->idcliente)),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>Update Clientes <?php echo $model->idcliente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelAgenteGanancias' => $modelAgenteGanancias,
            'modelAgenteIIBB' => $modelAgenteIIBB,
            'modelAgenteIVA' => $modelAgenteIVA)); ?>