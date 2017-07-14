<?php
/* @var $this AlliancespsbController */
/* @var $model AllianceSpsb */

$this->breadcrumbs=array(
	'Alliance Spsbs'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage AllianceSpsb';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
 array('create'),
 array('class' => 'btn btn-info btn-md'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
 array('index'),
 array('class' => 'btn btn-info btn-md'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add AllianceSpsb',
 array('create'),
 array('class' => 'btn btn-info btn-flat'));
 ?>
		<?php echo CHtml::link('List AllianceSpsb',
 array('index'),
 array('class' => 'btn btn-info btn-flat'));
 ?>

	</span>	

	<HR>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'alliance-spsb-grid',
		'dataProvider'=>$model->search(),
		//'filter'=>$model,
		'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
		'columns'=>array(

		array(
		'header'=>'No',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
		'htmlOptions'=>array('width'=>'10px', 
		'style' => 'text-align: center;')),

				'id_alliance_spsb',
		'created_date',
		'update_date',
		'id_user',
		'company_id',
		'alliance_id',
		/*
		'affiliate_id',
		'status',
		*/
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}',
				'buttons'=>array(
					'view'=>
					array(
						'url'=>'Yii::app()->createUrl("AllianceSpsb/view", array("id"=>$data->id_alliance_spsb))',
						'options'=>array(
							'ajax'=>array(
								'type'=>'POST',
								'url'=>"js:$(this).attr('href')",
								'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
								),
							),
						),
					),
				),
		),
		)); ?>



		<!-- Modal -->
		<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Popup Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>View</strong> AllianceSpsb</h4>
					</div>
					<!-- Popup Content -->
					<div class="modal-body">
						<p>Details</p>
					</div>
					<!-- Popup Footer -->
					<div class="modal-footer">
						<BR>
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>


