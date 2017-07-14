<?php
/* @var $this RecomendedletterController */
/* @var $model Recomendedletter */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'summonletter-form',
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
					<?php echo $form->labelEx($model,'letter_code'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'letter_code'); ?>
					<?php echo $form->textField($model,'letter_code',array('class'=>'form-control'),array('data-mask'=>"999")); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'letter_code_alliance'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'letter_code_alliance'); ?>
					<?php echo $form->textField($model,'letter_code_alliance',array('class'=>'form-control'),array('data-mask'=>"999")); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'letter_date_alliance'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'letter_date_alliance'); ?>
											<?php
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'options'=>array(
								'showAnim'=>'fold',
								),
							'model'=>$model,
							'attribute'=>'letter_date_alliance',
							'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->letter_date_alliance)),
							'htmlOptions'=>array(
								'class'=>'form-control',
								'placeholder'=>'Tanggal Panggilan',												
								'tabindex'=>2
								),
							'options'=>array(
								'dateFormat' => 'd-mm-yy',
												'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),
							));
							?>
				</div>

			</div>  						


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'attachment'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'attachment'); ?>
					<?php echo $form->dropDownlist($model,'attachment',array(''=>'-- Pilih Lampiran --','-'=>'Tidak Ada Lampiran','1'=>'1 Lampiran','2'=>'2 Lampiran','3'=>'3 Lampiran'),array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'asfor'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'asfor'); ?>
					<?php echo $form->dropDownlist($model,'asfor',array(''=>'-- Pilih Anjuran --','1'=>'Anjuran Penyelesaian PHI'),array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'organization_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'organization_id'); ?>
					<?php echo $form->dropDownList($model, "organization_id",
						CHtml::listData(Alliance::model()->findAll(array('condition'=>'','order'=>'name ASC')),
							'id_alliance', 'name'
							),
						array("empty"=>"-- Pilih Serikat Buruh --", 'class'=>'form-control')
						); ?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'employee_description'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'employee_description'); ?>
						<?php echo $form->textArea($model,'employee_description',array('class'=>'summernote'),array('data-mask'=>"999")); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'company_description'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'company_description'); ?>
						<?php echo $form->textArea($model,'company_description',array('class'=>'summernote'),array('data-mask'=>"999")); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'recomended_mediator'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'recomended_mediator'); ?>
						<?php echo $form->textArea($model,'recomended_mediator',array('class'=>'summernote'),array('data-mask'=>"999")); ?>
					</div>

				</div>  		

				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'recomended_descriptio'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'recomended_descriptio'); ?>
						<?php echo $form->textArea($model,'recomended_descriptio',array('class'=>'summernote'),array('data-mask'=>"999")); ?>
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