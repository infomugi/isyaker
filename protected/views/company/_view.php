<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_company)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'company_code',
						array(
							'name'=>'district_id',
							'value'=>$data->District->name
							),

						array(
							'name'=>'category_id',
							'value'=>Company::model()->category($data->category_id)
							),																	

						array(
							'name'=>'classification',
							'value'=>Company::model()->classification($data->classification)
							),
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
