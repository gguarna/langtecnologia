<?php
/* @var $this Proveedor_productoController */
/* @var $model ProveedorProducto */

$this->breadcrumbs=array(
	'Proveedor Productos'=>array('index'),
	$model->id_proveedor=>array('view','id'=>$model->id_proveedor),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProveedorProducto', 'url'=>array('index')),
	array('label'=>'Create ProveedorProducto', 'url'=>array('create')),
	array('label'=>'View ProveedorProducto', 'url'=>array('view', 'id'=>$model->id_proveedor)),
	array('label'=>'Manage ProveedorProducto', 'url'=>array('admin')),
);
?>

<h1>Update ProveedorProducto <?php echo $model->id_proveedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>