<?php
/* @var $this OperadoresController */
/* @var $model Operadores */
?>

<h1>ABM Operadores</h1>
<?php
echo CHtml::link('Agregar operador', $this->createAbsoluteUrl('operadores/create'));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'operadores-grid',
    'dataProvider' => $model->search(),
    //'filter'=>$model,
    'columns' => array(
        'idoperador',
        'nombre',
        'apellido',
        'idoperadorTipo.descripcion',
        'usuario',
        'email',
        /*
          'idoperador_tipo',
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
            'template' => '{add_admin}{del_admin}{porcentaje_comision}',
            'buttons' => array
                (
                'add_admin' => array(
                    'label' => 'Cambiar rol a administrador',
                    'imageUrl' => $this->createUrl('../../images/silk/user_suit.png'),
                    'url' => 'Yii::app()->createUrl("operadores/cambio", array("id"=>$data->idoperador,"idoperador_tipo"=>2))',
                    'visible'=>'$data->idoperador_tipo==1',
                ),
                'del_admin' => array(
                    'label' => 'Cambiar rol operador normal',
                    'imageUrl' => $this->createUrl('../../images/silk/user.png'),
                    'url' => 'Yii::app()->createUrl("operadores/cambio", array("id"=>$data->idoperador,"idoperador_tipo"=>1))',
                    
                    'visible'=>'$data->idoperador_tipo==2',
                ),
                'porcentaje_comision' => array(
                    'label' => 'Cambiar porcentajes de comision',
                    'imageUrl' => $this->createUrl('../../images/silk/calculator.png'),
                    'url' => 'Yii::app()->createUrl("operadores/agregarporcentajes", array("id"=>$data->idoperador))',
                    
                ),
            )
        ),
    ),
));
?>
