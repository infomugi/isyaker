<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */

$this->breadcrumbs=array(
	'Surat Panggilan'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Surat Panggilan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('List Panggilan',
				array('index'),
				array('class' => 'btn btn-warning btn-flat'));
				?>

			</span>	

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'summonletter-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(
						
						'letter_code',

						array(
							'name'=>'terminate_id',
							'value'=>'$data->Terminate->terminate_code'
							),	

						'created_date',

						array(
							'name'=>'id_user',
							'value'=>'$data->Member->fullname'
							),


						array(
							'name'=>'characteristic',
							'value'=>'Summonletter::model()->characteristic($data->characteristic)'
							),



						array(
							'class'=>'CButtonColumn',
							'template'=>'{view}',
							'buttons'=>array(
								'view'=>
								array(
									'url'=>'Yii::app()->createUrl("Summonletter/view", array("id"=>$data->id_summonletter))',
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
										<h4 class="modal-title"><strong>View</strong> Surat Panggilan</h4>
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


