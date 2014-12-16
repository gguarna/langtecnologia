<?php
/* @var $this ImagenProductoController */
/* @var $model ImagenProducto */

$this->breadcrumbs=array(
	'Imagen Productos'=>array('index'),
	$model->id_producto,
);

$this->menu=array(
	array('label'=>'List ImagenProducto', 'url'=>array('index')),
	array('label'=>'Create ImagenProducto', 'url'=>array('create')),
	array('label'=>'Update ImagenProducto', 'url'=>array('update', 'id'=>$model->id_producto)),
	array('label'=>'Delete ImagenProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_producto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImagenProducto', 'url'=>array('admin')),
);
?>

<h1>View ImagenProducto #<?php echo $model->id_producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_imagen',
		'id_producto',
	),
)); ?>
