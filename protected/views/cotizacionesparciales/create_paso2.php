<?php
/* @var $this CotizacionesParcialesController */
/* @var $model CotizacionesParciales */
?>

<h1>Nueva cotizacion parcial - Paso 2 </h1>

<?php echo $this->renderPartial('_form_paso2', array('model'=>$model,'modelPrecioUnitario'=>$modelPrecioUnitario,'modelColImpPrecioUnitario'=>$modelColImpPrecioUnitario)); ?>