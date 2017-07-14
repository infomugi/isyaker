<?php
/* @var $this TerminateController */
/* @var $model Terminate */

$this->breadcrumbs=array(
	'Terminates'=>array('index'),
	'Mediator',
	);

$this->pageTitle='Manage Mediasi';
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

			<?php echo CHtml::link('Add Mediasi',
				array('create'),
				array('class' => 'btn btn-warning btn-flat'));
				?>
				<?php echo CHtml::link('List Mediasi',
					array('index'),
					array('class' => 'btn btn-warning btn-flat'));
					?>
					<?php echo CHtml::link('Surat Panggilan',
						array('summonletter/admin'),
						array('class' => 'btn btn-success btn-flat'));
						?>
						<?php echo CHtml::link('Surat Anjuran',
							array('recomendedletter/admin'),
							array('class' => 'btn btn-success btn-flat'));
							?>		

								</span>	

								<HR>

									<?php $this->widget('zii.widgets.grid.CGridView', array(
										'id'=>'terminate-grid',
										'dataProvider'=>$model->search(),
										'filter'=>$model,
										'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
										'columns'=>array(

											array(
												'header'=>'No',
												'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
												'htmlOptions'=>array('width'=>'10px', 
													'style' => 'text-align: center;')),

											array(
												'header'=>'Nama Perusahaan',
												'value'=>'$data->Company->name'
												),

											'employee_name',

											array(
												'name'=>'status',
												'filter'=>array('1'=>'Selesai','0'=>'Belum Selesai'),
												'value'=>'Terminate::model()->status($data->status)',
												),	

											array(
												'name'=>'type',
												'filter'=>array('1'=>'PHK','2'=>'PHI','3'=>'HAK','4'=>'SPSB'),
												'value'=>'Terminate::model()->type($data->type)',
												),								

											array(
												'class'=>'CButtonColumn',
												'template'=>'{view}',
												'buttons'=>array(
													'view'=>
													array(
														'url'=>'Yii::app()->createUrl("Terminate/view", array("id"=>$data->id_terminate))',
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
															<h4 class="modal-title"><strong>View</strong> Mediasi</h4>
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


