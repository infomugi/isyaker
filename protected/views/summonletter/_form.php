<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */
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
					<?php echo $form->dropDownlist($model,'asfor',array(''=>'-- Pilih Panggilan --','1'=>'Panggilan 1','2'=>'Panggilan 2','3'=>'Panggilan 3'),array('class'=>'form-control')); ?>
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
						<?php echo $form->labelEx($model,'letter_date'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'letter_date'); ?>
						<?php
						$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'options'=>array(
								'showAnim'=>'fold',
								),
							'model'=>$model,
							'attribute'=>'letter_date',
							'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->letter_date)),
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
							<?php echo $form->labelEx($model,'letter_time'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'letter_time'); ?>
							<?php echo $form->textField($model,'letter_time',array('class'=>'form-control'),array('data-mask'=>"99:99")); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'appear_to_one'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'appear_to_one'); ?>
							<?php echo $form->dropDownList($model, "appear_to_one",
								CHtml::listData(Useraccounts::model()->findAll(array('condition'=>'','order'=>'fullname ASC')),
									'id_user', 'fullname'
									),
								array("empty"=>"-- Pilih Menghadap 1 --", 'class'=>'form-control')
								); ?> 
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'appear_to_two'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'appear_to_two'); ?>
								<?php echo $form->dropDownList($model, "appear_to_two",
									CHtml::listData(Useraccounts::model()->findAll(array('condition'=>'','order'=>'fullname ASC')),
										'id_user', 'fullname'
										),
									array("empty"=>"-- Pilih Menghadap 2 --", 'class'=>'form-control')
									); ?> 
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