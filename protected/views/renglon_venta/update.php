<?php
/* @var $this Renglon_ventaController */
/* @var $model RenglonVenta */

$this->breadcrumbs=array(
	'Renglon Ventas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RenglonVenta', 'url'=>array('index')),
	array('label'=>'Create RenglonVenta', 'url'=>array('create')),
	array('label'=>'View RenglonVenta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RenglonVenta', 'url'=>array('admin')),
);
?>

<h1>Update RenglonVenta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>