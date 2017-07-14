<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_summonletter'); ?>
		<?php echo $form->textField($model,'id_summonletter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_code'); ?>
		<?php echo $form->textField($model,'letter_code',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'characteristic'); ?>
		<?php echo $form->textField($model,'characteristic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'degree'); ?>
		<?php echo $form->textField($model,'degree'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attachment'); ?>
		<?php echo $form->textField($model,'attachment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asfor'); ?>
		<?php echo $form->textField($model,'asfor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'organization_id'); ?>
		<?php echo $form->textField($model,'organization_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_date'); ?>
		<?php echo $form->textField($model,'letter_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_time'); ?>
		<?php echo $form->textField($model,'letter_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appear_to_one'); ?>
		<?php echo $form->textField($model,'appear_to_one'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appear_to_two'); ?>
		<?php echo $form->textField($model,'appear_to_two'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminate_id'); ?>
		<?php echo $form->textField($model,'terminate_id'); ?>
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