<?php
/* @var $this Renglon_ventaController */
/* @var $model RenglonVenta */

$this->breadcrumbs=array(
	'Renglon Ventas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RenglonVenta', 'url'=>array('index')),
	array('label'=>'Manage RenglonVenta', 'url'=>array('admin')),
);
?>

<h1>Create RenglonVenta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>