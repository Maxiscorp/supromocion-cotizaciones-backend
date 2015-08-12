<?php
/* @var $this OrdenesComentariosController */
/* @var $model OrdenesComentarios */
?>

    <h3>Nuevo comentario para la orden de producción con numero de prespuesto <b><?php echo $orden->nro_presupuesto; ?></b><br /> <br /> Cliente: <b><?php echo $orden->idcliente0->razon_social; ?></b></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>