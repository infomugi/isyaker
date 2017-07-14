<?php
/* @var $this CompanyEmployeeController */
/* @var $model CompanyEmployee */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'company-employee-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'year'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'year'); ?>
					<?php echo $form->textField($model,'year',array('class'=>'form-control')); ?>
				</div>
				
			</div> 			


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'employee_male'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'employee_male'); ?>
					<?php echo $form->textField($model,'employee_male',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'employee_female'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'employee_female'); ?>
					<?php echo $form->textField($model,'employee_female',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'employee_strange_male'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'employee_strange_male'); ?>
					<?php echo $form->textField($model,'employee_strange_male',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'employee_strange_female'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'employee_strange_female'); ?>
					<?php echo $form->textField($model,'employee_strange_female',array('class'=>'form-control')); ?>
				</div>

			</div>  

			

			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->