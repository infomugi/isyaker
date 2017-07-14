<?php
/* @var $this TerminateController */
/* @var $model Terminate */

$this->breadcrumbs=array(
	'Mediasi'=>array('index'),
	$model->terminate_code,
	);

$dataSummonLetter=new CActiveDataProvider('Summonletter',array(
	'criteria'=>array(
		'condition'=>'terminate_id = '.$model->id_terminate,
		'order'=>'letter_code ASC',
		)));


$dataRecomendedletter=new CActiveDataProvider('Recomendedletter',array(
	'criteria'=>array(
		'condition'=>'terminate_id = '.$model->id_terminate,
		'order'=>'letter_code ASC',
		)));

$this->pageTitle='Detail - Laporan Mediasi Hubungan Industrial';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Mediator'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Mediator'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Mediator'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_terminate,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit '));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_terminate,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus '));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-warning btn-flat','title'=>'Add Mediator'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Mediator'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Mediator'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_terminate,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Mediator'));
													?>
													<?php echo CHtml::link('Surat Panggilan', 
														array('summonletter/create', 'terminate'=>$model->id_terminate,
															), array('class' => 'btn btn-info btn-flat', 'title'=>'Buat Surat Panggilan'));
															?>
															<?php echo CHtml::link('Surat Anjuran', 
																array('recomendedletter/create', 'terminate'=>$model->id_terminate,
																	), array('class' => 'btn btn-success btn-flat', 'title'=>'Buat Surat Anjuran Penyelesaian'));
																	?>
													

																		</span>

																		<HR>
																			<H3><i class="fa fa-archive"></i> Mediasi</H3>
																			<?php $this->widget('zii.widgets.CDetailView', array(
																				'data'=>$model,
																				'htmlOptions'=>array("class"=>"table"),
																				'attributes'=>array(

																					array(
																						'name'=>'id_user',
																						'value'=>$model->Member->fullname
																						),

																					'created_date',
																					'update_date',

																					array(
																						'name'=>'type',
																						'value'=>Terminate::model()->type($model->type),
																						),
																					array(
																						'name'=>'status',
																						'value'=>Terminate::model()->status($model->status),
																						),	

																					),
																					)); ?>


																					<H3><i class="fa fa-archive"></i> Perusahaan</H3>
																					<?php $this->widget('zii.widgets.CDetailView', array(
																						'data'=>$model,
																						'htmlOptions'=>array("class"=>"table"),
																						'attributes'=>array(


																							array(
																								'label'=>'Nama Perusahaan',
																								'value'=>$model->Company->name
																								),
																							array(
																								'label'=>'Alamat',
																								'value'=>$model->Company->address
																								),
																							array(
																								'label'=>'Phone',
																								'value'=>$model->Company->phone
																								),																					

																							),
																							)); ?>

																							<H3><i class="fa fa-archive"></i> Pekerja</H3>
																							<?php $this->widget('zii.widgets.CDetailView', array(
																								'data'=>$model,
																								'htmlOptions'=>array("class"=>"table"),
																								'attributes'=>array(																			

																									'employee_name',
																									'employee_address',
																									'employee_phone',

																									array(
																										'name'=>'totalMale',
																										'value'=>$model->totalMale . " Orang"
																										),
																									array(
																										'name'=>'totalFemale',
																										'value'=>$model->totalFemale . " Orang"
																										),
																									array(
																										'label'=>'Total PHK',
																										'value'=>$model->totalFemale + $model->totalMale  . " Orang"
																										),	


																									),
																									)); ?>


																									<H3><i class="fa fa-archive"></i> Surat Anjuran</H3>
																									<?php $this->widget('zii.widgets.grid.CGridView', array(
																										'id'=>'summonletter-grid',
																										'dataProvider'=>$dataRecomendedletter,
																										//'filter'=>$model,
																										'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
																										'columns'=>array(

																											array(
																												'header'=>'No',
																												'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																												'htmlOptions'=>array('width'=>'10px', 
																													'style' => 'text-align: center;')),

																											'created_date',

																											array(
																												'name'=>'id_user',
																												'value'=>'$data->Member->fullname'
																												),

																											'letter_code',



																											array(
																												'class'=>'CButtonColumn',
																												'template'=>'{view}',
																												'buttons'=>array(
																													'view'=>
																													array(
																														'url'=>'Yii::app()->createUrl("Recomendedletter/view", array("id"=>$data->id_recomendedletter))',
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

																																																				<H3><i class="fa fa-archive"></i> Surat Panggilan</H3>
																									<?php $this->widget('zii.widgets.grid.CGridView', array(
																										'id'=>'summonletter-grid',
																										'dataProvider'=>$dataSummonLetter,
																										//'filter'=>$model,
																										'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
																										'columns'=>array(

																											array(
																												'header'=>'No',
																												'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																												'htmlOptions'=>array('width'=>'10px', 
																													'style' => 'text-align: center;')),

																											'created_date',

																											array(
																												'name'=>'id_user',
																												'value'=>'$data->Member->fullname'
																												),

																											'letter_code',

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



<STYLE>
	th{width:200px;}
</STYLE>

