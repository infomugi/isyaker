<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->employee_code), array('view', 'id'=>$data->id_employee)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'name',
						'address',
						'phone',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
