<?php
/* @var $this RecomendedletterController */
/* @var $data Recomendedletter */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode("Nomor Surat : ".$data->letter_code), array('view', 'id'=>$data->id_recomendedletter)); ?>
				<br />

				
			</div>
			<div class="box-body">


																	<?php $this->widget('zii.widgets.CDetailView', array(
																		'data'=>$data,
																		'htmlOptions'=>array("class"=>"table"),
																		'attributes'=>array(
																			'created_date',

																			array(
																				'name'=>'id_user',
																				'value'=>$data->Member->fullname
																				),

																			'letter_code',

																			array(
																				'name'=>'characteristic',
																				'value'=>Summonletter::model()->characteristic($data->characteristic)
																				),

																			array(
																				'name'=>'degree',
																				'value'=>Summonletter::model()->degree($data->degree)
																				),


																			array(
																				'name'=>'asfor',
																				'value'=>Summonletter::model()->asfor($data->asfor)
																				),
																			
																			array(
																				'name'=>'organization_id',
																				'value'=>$data->Alliance->name
																				),

																	
																			),
																			)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
