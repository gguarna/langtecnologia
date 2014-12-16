<?php
/* @var $this ImagenProductoController */
/* @var $model ImagenProducto */

$this->breadcrumbs=array(
	'Imagen Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImagenProducto', 'url'=>array('index')),
	array('label'=>'Manage ImagenProducto', 'url'=>array('admin')),
);
?>

<h1>Create ImagenProducto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>