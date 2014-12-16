<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_total'); ?>
		<?php echo $form->textField($model,'precio_total',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'precio_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor'); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->