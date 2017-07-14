<?php
/* @var $this AlliancespsbController */
/* @var $data AllianceSpsb */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_alliance_spsb), array('view', 'id'=>$data->id_alliance_spsb)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_alliance_spsb',
		'created_date',
		'update_date',
		'id_user',
		'company_id',
		'alliance_id',
		'affiliate_id',
		'status',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
