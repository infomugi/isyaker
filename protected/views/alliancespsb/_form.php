<?php
/* @var $this AlliancespsbController */
/* @var $model AllianceSpsb */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'alliance-spsb-form',
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
							<?php echo $form->labelEx($model,'created_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'created_date'); ?>
							<?php echo $form->textField($model,'created_date',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'update_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'update_date'); ?>
							<?php echo $form->textField($model,'update_date',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'id_user'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'id_user'); ?>
							<?php echo $form->textField($model,'id_user',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'company_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'company_id'); ?>
							<?php echo $form->textField($model,'company_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'alliance_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'alliance_id'); ?>
							<?php echo $form->textField($model,'alliance_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'affiliate_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'affiliate_id'); ?>
							<?php echo $form->textField($model,'affiliate_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
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