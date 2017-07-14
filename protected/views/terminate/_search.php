<?php
/* @var $this TerminateController */
/* @var $model Terminate */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_terminate'); ?>
		<?php echo $form->textField($model,'id_terminate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_address'); ?>
		<?php echo $form->textArea($model,'company_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_phone'); ?>
		<?php echo $form->textField($model,'company_phone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_name'); ?>
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_address'); ?>
		<?php echo $form->textArea($model,'employee_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_phone'); ?>
		<?php echo $form->textField($model,'employee_phone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subdistrict'); ?>
		<?php echo $form->textField($model,'subdistrict'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalMale'); ?>
		<?php echo $form->textField($model,'totalMale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalFemale'); ?>
		<?php echo $form->textField($model,'totalFemale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'result'); ?>
		<?php echo $form->textField($model,'result'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->