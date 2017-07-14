<?php
/* @var $this AllianceController */
/* @var $model Alliance */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'alliance-form',
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
					<?php echo $form->labelEx($model,'name'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'address'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'address'); ?>
					<?php echo $form->textArea($model,'address',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'phone'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'phone'); ?>
					<?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'category_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'category_id'); ?>
					<?php echo $form->dropDownList($model, "category_id",
						CHtml::listData(Category::model()->findAll(array('condition'=>'','order'=>'name ASC')),
							'id_category', 'name'
							),
						array("empty"=>"-- Pilih Sektor --", 'class'=>'form-control')
						); ?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'subdistrict_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'subdistrict_id'); ?>
						<?php echo $form->dropDownList($model, "subdistrict_id",
							CHtml::listData(Subdistrict::model()->findAll(array('condition'=>'','order'=>'name ASC')),
								'id_subdistrict', 'name'
								),
							array("empty"=>"-- Pilih Kecamatan --", 'class'=>'form-control')
							); ?> 
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
								array('1'=>'Aktif','0'=>'Tidak Aktif'),
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