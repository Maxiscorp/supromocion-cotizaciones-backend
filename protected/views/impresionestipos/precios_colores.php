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
                    'precios_listado', array('model' => $model,'idimpresion_color'=>1,'modelInsert'=>$modelInsert), TRUE
            )),
        'Dos Colores' => array('id' => '2', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>2,'modelInsert'=>$modelInsert), TRUE
            )),
        'Tres Colores' => array('id' => '3', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>3,'modelInsert'=>$modelInsert), TRUE
            )),
        'Cuatro Colores' => array('id' => '4', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>4,'modelInsert'=>$modelInsert), TRUE
            )),
        'Full-Color' => array('id' => '5', 'content' => $this->renderPartial(
                    'precios_listado', array('model' => $model,'idimpresion_color'=>5,'modelInsert'=>$modelInsert), TRUE
            )),
    ),
    
    // additional javascript options for the tabs plugin
    'options' => array(
        'collapsible' => true,
    ),
    'id' => 'precios-colores',
));
?>