<?php
/* @var $this RecomendedletterController */
/* @var $model Recomendedletter */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_recomendedletter'); ?>
		<?php echo $form->textField($model,'id_recomendedletter'); ?>
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
		<?php echo $form->textField($model,'letter_code',array('size'=>25,'maxlength'=>25)); ?>
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
		<?php echo $form->label($model,'organization_id'); ?>
		<?php echo $form->textField($model,'organization_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminate_id'); ?>
		<?php echo $form->textField($model,'terminate_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_description'); ?>
		<?php echo $form->textArea($model,'employee_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_description'); ?>
		<?php echo $form->textArea($model,'company_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recomended_mediator'); ?>
		<?php echo $form->textArea($model,'recomended_mediator',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recomended_descriptio'); ?>
		<?php echo $form->textArea($model,'recomended_descriptio',array('rows'=>6, 'cols'=>50)); ?>
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