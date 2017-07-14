<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_company'); ?>
		<?php echo $form->textField($model,'id_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_code'); ?>
		<?php echo $form->textField($model,'company_code',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'district_name'); ?>
		<?php echo $form->textField($model,'district_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'district_id'); ?>
		<?php echo $form->textField($model,'district_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klui'); ?>
		<?php echo $form->textField($model,'klui'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wnimale'); ?>
		<?php echo $form->textField($model,'wnimale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wnifemale'); ?>
		<?php echo $form->textField($model,'wnifemale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wnamale'); ?>
		<?php echo $form->textField($model,'wnamale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wnafemale'); ?>
		<?php echo $form->textField($model,'wnafemale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classification'); ?>
		<?php echo $form->textField($model,'classification',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
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