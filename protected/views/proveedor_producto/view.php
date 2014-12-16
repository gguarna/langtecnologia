<?php
/* @var $this Proveedor_productoController */
/* @var $model ProveedorProducto */

$this->breadcrumbs=array(
	'Proveedor Productos'=>array('index'),
	$model->id_proveedor,
);

$this->menu=array(
	array('label'=>'List ProveedorProducto', 'url'=>array('index')),
	array('label'=>'Create ProveedorProducto', 'url'=>array('create')),
	array('label'=>'Update ProveedorProducto', 'url'=>array('update', 'id'=>$model->id_proveedor)),
	array('label'=>'Delete ProveedorProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proveedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProveedorProducto', 'url'=>array('admin')),
);
?>

<h1>View ProveedorProducto #<?php echo $model->id_proveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proveedor',
		'id_producto',
	),
)); ?>
