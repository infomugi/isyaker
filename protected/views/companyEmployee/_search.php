<?php
/* @var $this CompanyEmployeeController */
/* @var $model CompanyEmployee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_company_employee'); ?>
		<?php echo $form->textField($model,'id_company_employee'); ?>
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
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_male'); ?>
		<?php echo $form->textField($model,'employee_male'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_female'); ?>
		<?php echo $form->textField($model,'employee_female'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_strange_male'); ?>
		<?php echo $form->textField($model,'employee_strange_male'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_strange_female'); ?>
		<?php echo $form->textField($model,'employee_strange_female'); ?>
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