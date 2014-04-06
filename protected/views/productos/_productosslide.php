<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dataprovider = $model->search();

$imagenes=array();
foreach ($dataprovider->data as $imagen) {
    $imagenes=array_merge((array)$imagenes,
            array(array(
                'text'=>$imagen->idarchivo0->nombre_archivo,
                'src'=>Yii::getPathOfAlias('archivos').$imagen->idarchivo0->ruta_archivo,
                'href'=>'#',
                ))
            );
}
$this->widget(
    'ext.SimpleFadeSlideShow.SimpleFadeSlideShow',
    array(
        'images' => $imagenes,
        'width' => 700,
        'height' => 500,
        'interval' => 10000,
        'speed' => 'slow',
        'ListElement' => false,
        'PlayPauseElement' => false,
        'autoPlay' => true,
    )
);