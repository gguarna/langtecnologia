<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-producto-form',
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
		<?php echo $form->labelEx($model,'imagenPrincipal'); ?>
		<?php echo $form->textField($model,'imagenPrincipal'); ?>
		<?php echo $form->error($model,'imagenPrincipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'existenciaMinima'); ?>
		<?php echo $form->textField($model,'existenciaMinima'); ?>
		<?php echo $form->error($model,'existenciaMinima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stockeable'); ?>
		<?php echo $form->textField($model,'stockeable'); ?>
		<?php echo $form->error($model,'stockeable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion'); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo'); ?>
		<?php echo $form->textField($model,'costo'); ?>
		<?php echo $form->error($model,'costo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'markup'); ?>
		<?php echo $form->textField($model,'markup'); ?>
		<?php echo $form->error($model,'markup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppp'); ?>
		<?php echo $form->textField($model,'ppp'); ?>
		<?php echo $form->error($model,'ppp'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->