<?php
/* @var $this Renglon_ventaController */
/* @var $model RenglonVenta */

$this->breadcrumbs=array(
	'Renglon Ventas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RenglonVenta', 'url'=>array('index')),
	array('label'=>'Create RenglonVenta', 'url'=>array('create')),
	array('label'=>'Update RenglonVenta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RenglonVenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RenglonVenta', 'url'=>array('admin')),
);
?>

<h1>View RenglonVenta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_producto',
		'cantidad',
		'precio',
		'id_venta',
	),
)); ?>
