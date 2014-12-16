<?php
/* @var $this Renglon_compraController */
/* @var $model RenglonCompra */

$this->breadcrumbs=array(
	'Renglon Compras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RenglonCompra', 'url'=>array('index')),
	array('label'=>'Create RenglonCompra', 'url'=>array('create')),
	array('label'=>'Update RenglonCompra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RenglonCompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RenglonCompra', 'url'=>array('admin')),
);
?>

<h1>View RenglonCompra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_producto',
		'cantidad',
		'precio',
		'id_compra',
	),
)); ?>
