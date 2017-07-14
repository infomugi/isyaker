<?php
/* @var $this TerminateController */
/* @var $model Terminate */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'terminate-form',
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
					<?php echo $form->labelEx($model,'company_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'company_id'); ?>
					<?php echo $form->dropDownList($model, "company_id",
						CHtml::listData(Company::model()->findAll(array('condition'=>'','order'=>'name ASC')),
							'id_company', 'name'
							),
						array("empty"=>"-- Pilih Perusahaan --", 'class'=>'form-control')
						); ?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'employee_name'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'employee_name'); ?>
						<?php echo $form->textField($model,'employee_name',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'employee_address'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'employee_address'); ?>
						<?php echo $form->textArea($model,'employee_address',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'employee_phone'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'employee_phone'); ?>
						<?php echo $form->textField($model,'employee_phone',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'subdistrict'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'subdistrict'); ?>
						<?php echo $form->dropDownList($model, "subdistrict",
							CHtml::listData(Subdistrict::model()->findAll(array('condition'=>'','order'=>'name ASC')),
								'id_subdistrict', 'name'
								),
							array("empty"=>"-- Pilih Kecamatan --", 'class'=>'form-control')
							); ?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'totalMale'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'totalMale'); ?>
							<?php echo $form->textField($model,'totalMale',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'totalFemale'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'totalFemale'); ?>
							<?php echo $form->textField($model,'totalFemale',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'type'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'type'); ?>
							<?php
							echo $form->radioButtonList($model,'type',
								array('1'=>'PHK','2'=>'PHI','3'=>'Hak','4'=>'SPSB'),
								array(
									'template'=>'{input}{label}',
									'separator'=>'',
									'labelOptions'=>array(
										'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

									)                              
								);
								?>					</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'result'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'result'); ?>
									<?php echo $form->textArea($model,'result',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'description'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'description'); ?>
									<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'status'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'status'); ?>
									<?php
									echo $form->radioButtonList($model,'status',
										array('2'=>'Proses','1'=>'Selesai','0'=>'Belum Selesai'),
										array(
											'template'=>'{input}{label}',
											'separator'=>'',
											'labelOptions'=>array(
												'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

											)                              
										);
										?>
									</div>

								</div>  

								<div class="form-group">
									<div class="col-md-12">  
									</br></br>
									<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-warning btn-flat pull-right')); ?>
								</div>
							</div>

							<?php $this->endWidget(); ?>

</div></div><!-- form -->