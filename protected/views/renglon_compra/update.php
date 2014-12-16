<?php
/* @var $this Renglon_compraController */
/* @var $model RenglonCompra */

$this->breadcrumbs=array(
	'Renglon Compras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RenglonCompra', 'url'=>array('index')),
	array('label'=>'Create RenglonCompra', 'url'=>array('create')),
	array('label'=>'View RenglonCompra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RenglonCompra', 'url'=>array('admin')),
);
?>

<h1>Update RenglonCompra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>