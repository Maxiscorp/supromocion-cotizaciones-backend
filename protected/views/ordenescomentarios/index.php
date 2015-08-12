<?php
/* @var $this OrdenesComentariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Comentarioses',
);

$this->menu=array(
	array('label'=>'Create OrdenesComentarios', 'url'=>array('create')),
	array('label'=>'Manage OrdenesComentarios', 'url'=>array('admin')),
);
?>

<h1>Ordenes Comentarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
