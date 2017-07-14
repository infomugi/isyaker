<?php
/* @var $this SettingsController */
/* @var $model Settings */
/* @var $form CActiveForm */
?>

<div class="row">
	<div class="col-lg-7 col-xs-12"> 

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'settings-form',
		'enableAjaxValidation'=>false,
		'enableClientValidation'=>true,
		'clientOptions'=>array('validateOnSubmit'=>true),
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
		)); ?>

		<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

		<div style="text-align:center">
		<center>
			<img width="180px" src='./dokumen/logo/<?php echo $model->logo; ?>' class="" alt="Logo">
			<?php echo $form->fileField($model,'logo',array('size'=>50,'maxlength'=>50, 'id'=>'fileupload','class'=>'btn btn-warning btn-flat')); ?> </BR>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Update', array('class' => 'btn btn-warning pull-left btn-flat')); ?>
		</center>
		</div>

<?php $this->endWidget(); ?>

</div></div><!-- form -->