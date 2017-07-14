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
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				<div class="col-lg-7 col-xs-12">  
					<div class="col-lg-4 col-xs-12">
						<?php echo $form->labelEx($model,'paypal_email'); ?>
					</div>   

					<div class="col-lg-8 col-md-7 col-xs-12">
						<?php echo $form->error($model,'paypal_email'); ?>
						<?php echo $form->textField($model,'paypal_email',array('class'=>'form-control')); ?>
					</div>
				</div>
			</div>  


			<div class="form-group">
				<div class="col-lg-7 col-xs-12">  
					<div class="col-lg-4 col-xs-12">
						<?php echo $form->labelEx($model,'currency'); ?>
					</div>   

					<div class="col-lg-8 col-md-7 col-xs-12">
						<?php echo $form->error($model,'currency'); ?>
						<?php
						echo $form->radioButtonList($model,'currency',
							array('IDR'=>'IDR','USD'=>'USD'),
							array(
								'template'=>'{input}{label}',
								'separator'=>'',
								'labelOptions'=>array(
									'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:15px'),
								)                              
							);
							?>
						</div>
					</div>
				</div>  


				<div class="form-group">
					<div class="col-md-7 col-xs-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-warning btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->