<?php
/* @var $this Renglon_ventaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Renglon Ventas',
);

$this->menu=array(
	array('label'=>'Create RenglonVenta', 'url'=>array('create')),
	array('label'=>'Manage RenglonVenta', 'url'=>array('admin')),
);
?>

<h1>Renglon Ventas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
