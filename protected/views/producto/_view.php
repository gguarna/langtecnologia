<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('markup')); ?>:</b>
	<?php echo CHtml::encode($data->markup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppp')); ?>:</b>
	<?php echo CHtml::encode($data->ppp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagenPrincipal')); ?>:</b>
	<?php echo CHtml::encode($data->imagenPrincipal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('existenciaMinima')); ?>:</b>
	<?php echo CHtml::encode($data->existenciaMinima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockeable')); ?>:</b>
	<?php echo CHtml::encode($data->stockeable); ?>
	<br />

	*/ ?>

</div>