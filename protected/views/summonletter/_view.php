<?php
/* @var $this SummonletterController */
/* @var $data Summonletter */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode("567/".$data->letter_code."-HIPK/".$data->created_date), array('view', 'id'=>$data->id_summonletter)); ?>
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
							'name'=>'attachment',
							'value'=>Summonletter::model()->attachment($data->attachment)
							),

						array(
							'name'=>'asfor',
							'value'=>Summonletter::model()->asfor($data->asfor)
							),

						array(
							'name'=>'organization_id',
							'value'=>$data->Alliance->name
							),

						'letter_date',
						'letter_time',

						array(
							'name'=>'appear_to_one',
							'value'=>$data->AppearOne->fullname
							),

						array(
							'name'=>'appear_to_two',
							'value'=>$data->AppearTwo->fullname
							),


						array(
							'label'=>'Kode Mediasi',
							'value'=>$data->Terminate->terminate_code
							),		

						array(
							'name'=>'status',
							'value'=>Summonletter::model()->status($data->status)
							),

						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
