<?php
/* @var $this ImagenProductoController */
/* @var $model ImagenProducto */

$this->breadcrumbs=array(
	'Imagen Productos'=>array('index'),
	$model->id_producto=>array('view','id'=>$model->id_producto),
	'Update',
);

$this->menu=array(
	array('label'=>'List ImagenProducto', 'url'=>array('index')),
	array('label'=>'Create ImagenProducto', 'url'=>array('create')),
	array('label'=>'View ImagenProducto', 'url'=>array('view', 'id'=>$model->id_producto)),
	array('label'=>'Manage ImagenProducto', 'url'=>array('admin')),
);
?>

<h1>Update ImagenProducto <?php echo $model->id_producto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>