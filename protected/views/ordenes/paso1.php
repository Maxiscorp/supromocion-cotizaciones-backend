<?php
/* @var $this OrdenesController */
/* @var $model Ordenes */

$this->breadcrumbs=array(
	'Ordenes'=>array('index'),
	'Create',
);

?>

    <h1>Nueva Orden de producción</h1>
    <h2>Cotizacion Nro <b><?php echo $cotizacion->idcotizacion; ?></b> del cliente "<?php echo $cotizacion->idcliente0->razon_social; ?>"</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>