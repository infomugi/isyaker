<?php
/* @var $this TerminateController */
/* @var $data Terminate */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->terminate_code), array('view', 'id'=>$data->id_terminate)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(

						array(
							'name'=>'company_id',
							'value'=>$data->Company->name
							),						

						'employee_name',

						array(
							'name'=>'subdistrict',
							'value'=>$data->Subdistrict->name
							),
						array(
							'name'=>'type',
							'value'=>Terminate::model()->type($data->type),
							),
						array(
							'name'=>'status',
							'value'=>Terminate::model()->status($data->status),
							),						
						),
						)); ?>			

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
