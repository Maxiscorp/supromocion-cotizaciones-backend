<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
    'Operadores' => array('admin'),
    'Create',
);
?>
    <h2>
        <?php
        echo CHtml::link('Volver ', $this->createAbsoluteUrl('operadores/admin'));
        ?>
    </h2>

<h2>Agregar rangos de porcentajes al operador</h2>
<div class="info">

    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
    ?>
</div>
<?php
echo $this->renderPartial('_formporcentajes', array(
    'model' => $modelOperadorPorcentaje,
));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'operadores-porcentajes-grid',
    'dataProvider' => $modelOperadoresPorcentajes->search(),
    'columns' => array(
        'importe_desde',
        'importe_hasta',
        'porcentaje',
        /*
          'activo',
         */
        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => "js:'El rango asociado al porcentaje será borrado! Continuar?'",
            'template' => '{delete}',
            'buttons' => array
                (
                'delete' => array(
                    'label' => 'Borrar Porcentaje',
                    'imageUrl' => $this->createUrl('../../images/silk/money_delete.png'),
                    'url' => '$this->grid->controller->createUrl("operadores/deleteporcentaje/$data->idoperador_porcentaje")',
                )
            )
        ),
    ),
));

?>