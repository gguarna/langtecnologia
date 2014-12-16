<?php
/* @var $this ImagenProductoController */
/* @var $model ImagenProducto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-producto-ImagenProducto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_imagen'); ?>
		<?php echo $form->textField($model,'id_imagen'); ?>
		<?php echo $form->error($model,'id_imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->