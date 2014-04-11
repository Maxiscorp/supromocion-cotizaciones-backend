<?php
/* @var $this ProductosController */
/* @var $model Productos */
Yii::app()->clientScript->registerScript(
        'myHideEffect', '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");', CClientScript::POS_READY
);
$this->breadcrumbs = array(
    'Productos' => array('admin'),
    'Create',
);
?>

<h2>
<?php
echo CHtml::link('Volver ', $this->createAbsoluteUrl('productos/admin'));
?>
</h2>
<h2>Detalles del producto</h2>

<table class="tablaform">
    <?php
    echo $this->renderPartial('_datos_basicos_producto', array('model' => $model,
    ));
    ?>

</table>
<h2>Agregar imagenes al producto</h2>
<?php
echo $this->renderPartial('_formimagenes', array('model' => $model,
    'modelArchivo' => $modelArchivo,
));
?>

<div class="info">

    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
    ?>
</div>
<?php
echo $this->renderPartial('_productosslide', array(
    'model' => $modelProductosImagenes,
));
?>