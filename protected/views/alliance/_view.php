<?php
/* @var $this AllianceController */
/* @var $data Alliance */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->alliance_code), array('view', 'id'=>$data->id_alliance)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'alliance_code',
						'name',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
