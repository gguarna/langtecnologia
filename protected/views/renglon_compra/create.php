<?php
/* @var $this Renglon_compraController */
/* @var $model RenglonCompra */

$this->breadcrumbs=array(
	'Renglon Compras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RenglonCompra', 'url'=>array('index')),
	array('label'=>'Manage RenglonCompra', 'url'=>array('admin')),
);
?>

<h1>Create RenglonCompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>