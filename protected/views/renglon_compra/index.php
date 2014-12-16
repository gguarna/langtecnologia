<?php
/* @var $this Renglon_compraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Renglon Compras',
);

$this->menu=array(
	array('label'=>'Create RenglonCompra', 'url'=>array('create')),
	array('label'=>'Manage RenglonCompra', 'url'=>array('admin')),
);
?>

<h1>Renglon Compras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
