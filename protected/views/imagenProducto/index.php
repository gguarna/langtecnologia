<?php
/* @var $this ImagenProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagen Productos',
);

$this->menu=array(
	array('label'=>'Create ImagenProducto', 'url'=>array('create')),
	array('label'=>'Manage ImagenProducto', 'url'=>array('admin')),
);
?>

<h1>Imagen Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
