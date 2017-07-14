<?php
/* @var $this CompanyEmployeeController */
/* @var $model CompanyEmployee */

$this->breadcrumbs=array(
	'Company Employees'=>array('index'),
	$model->id_company_employee,
	);

$this->pageTitle='Detail Karyawan Perusahaan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-info btn-flat','title'=>'Add Karyawan Perusahaan'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-info btn-flat', 'title'=>'List Karyawan Perusahaan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-info btn-flat','title'=>'Manage Karyawan Perusahaan'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_company_employee,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Karyawan Perusahaan'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_company_employee,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Karyawan Perusahaan'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-info btn-flat','title'=>'Add Karyawan Perusahaan'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-info btn-flat', 'title'=>'List Karyawan Perusahaan'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-info btn-flat','title'=>'Manage Karyawan Perusahaan'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_company_employee,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Karyawan Perusahaan'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_company_employee,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Karyawan Perusahaan'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'created_date',
																	'update_date',
																		array(
																				'name'=>'user_id',
																				'value'=>$model->Member->fullname
																				),
																	array(
																				'name'=>'company_id',
																				'value'=>$model->Company->name
																				),
																	'employee_male',
																	'employee_female',
																	'employee_strange_male',
																	'employee_strange_female',
																	'status',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

