<?php
/* @var $this ProductosTiposMaterialesController */
/* @var $model ProductosTiposMateriales */
/* @var $form CActiveForm */
?>
<?php
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
);
?>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'productos-tipos-materiales-form',
        'enableAjaxValidation' => false,
    ));
    ?>


<?php echo $form->errorSummary($model); ?>



    <div class="container">
        <?php
        echo $form->dropDownList($model, 'idmaterial', CHtml::listData(Materiales::model()->findAll(
                                array(
                                    'condition' => 'activo = 1 and idmaterial not in(select idmaterial from productos_tipos_materiales where activo=1 and idproducto_tipo='.$model->idproducto_tipo.')',
                                    'order' => 'descripcion')), 'idmaterial', 'descripcion'), array());
        ?>
<?php echo $form->error($model, 'idprovincia'); ?>
    <?php echo CHtml::submitButton('Agregar'); ?>
    </div>

<?php $this->endWidget(); ?>
    <div class="info">
  
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
    </div>
</div><!-- form -->