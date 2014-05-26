<?php
/* @var $this CotizacionesparcialesdetalleController */
/* @var $model CotizacionesParcialesDetalle */
?>

<h1>Nuevo precio unitario por cantidad - Paso 2 </h1>
<?php
echo CHtml::link('Cambiar la cantidad', $this->createAbsoluteUrl('cotizacionesparcialesdetalle/update', array('id' => $model->idcotizacion_parcial_detalle)));
?>
<br />
<?php echo $this->renderPartial('_form_paso2', array('model'=>$model,'modelPrecioUnitario'=>$modelPrecioUnitario,'modelColImpPrecioUnitario'=>$modelColImpPrecioUnitario)); ?>