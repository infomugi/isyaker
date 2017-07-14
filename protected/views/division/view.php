<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	$model->name,
	);

$dataUsers=new CActiveDataProvider('Useraccounts',array(
	'criteria'=>array(
		'condition'=>'division = '.$model->id_division,
		'order'=>'fullname ASC',
		)));

$this->pageTitle='Detail Kantor Bagian';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Kantor Bagian'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kantor Bagian'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kantor Bagian'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_division,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Kantor Bagian'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_division,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Delete Kantor Bagian'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-warning btn-flat','title'=>'Add Kantor Bagian'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kantor Bagian'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kantor Bagian'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_division,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Kantor Bagian'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_division,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Delete Kantor Bagian'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'name',
																	'description',
																	array(
																		'name'=>'status',
																		'value'=>Useraccounts::model()->status($model->status),
																		),																	),
																		)); ?>


															<?php $this->widget('zii.widgets.grid.CGridView', array(
																'id'=>'useraccounts-grid',
																'dataProvider'=>$dataUsers,
																'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
																'columns'=>array(

																	array(    
																		'name'=>'fullname',
																		'value'=>'$data->fullname',
																		'sortable' => TRUE, 
																		'htmlOptions'=>array('width'=>'130px')),

																	array(    
																		'name'=>'email',
																		'value'=>'$data->email',
																		'sortable' => TRUE, 
																		'htmlOptions'=>array('width'=>'130px')),					

																	array(    
																		'name'=>'level',
																		'type'=>'raw', 
																		'filter'=>array('0'=>'Belum Diverifikasi','1'=>'Administrator','2'=>'Pimpinan','3'=>'PIC','4'=>'Member','5'=>'Perusahaan'),
																		'value'=>'Useraccounts::model()->level($data->level)',
																		'sortable' => TRUE, 
																		'htmlOptions'=>array('width'=>'130px')),							

																	array(
																		'header'=>'Action',
																		'visible'=>'$data->level != "1"',
																		'class'=>'CButtonColumn',
																		'template'=>'{view}',
																		'buttons'=>array(
																			'view'=>
																			array('url'=>'Yii::app()->createUrl("useraccounts/profile", array("name"=>$data->username))'),
																			),
																		),
																	),
																	)); ?>

<STYLE>
	th{width:150px;}
</STYLE>

