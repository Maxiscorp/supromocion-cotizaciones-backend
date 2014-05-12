<?php
$impresion = ImpresionesTipos::model()->findByPk($model->idimpresion_tipo);
?>
<h1>
    Selecci&oacute;n de precios por color para "<?php echo $impresion->descripcion; ?>" 
</h1>
<?php
$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => array(
        'Un Color' => array('id' => '1', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>1), TRUE
            )),
        'dos Colores' => array('id' => '2', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>2), TRUE
            )),
        'res Colores' => array('id' => '3', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>3), TRUE
            )),
        'Cuatro Colores' => array('id' => '4', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>4), TRUE
            )),
        'Full-Color' => array('id' => '5', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>5), TRUE
            )),
    ),
    // additional javascript options for the tabs plugin
    'options' => array(
        'collapsible' => true,
    ),
    'id' => 'precios-colores',
));
?>