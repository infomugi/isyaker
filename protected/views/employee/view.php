<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Pekerja';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Pekerja'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Pekerja'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Pekerja'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_employee,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Pekerja'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_employee,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pekerja'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-warning btn-flat','title'=>'Add Pekerja'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Pekerja'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Pekerja'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_employee,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Pekerja'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_employee,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pekerja'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'employee_code',
																	'name',
																	'address',
																	'phone',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

