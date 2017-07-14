<?php
/* @var $this AllianceController */
/* @var $model Alliance */

$this->breadcrumbs=array(
	'Alliances'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Serikat';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Serikat'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Serikat'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Serikat'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_alliance,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Serikat'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_alliance,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Serikat'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-warning btn-flat','title'=>'Add Serikat'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Serikat'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Serikat'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_alliance,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Serikat'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_alliance,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Alliance'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'alliance_code',
																	'name',
																	'address',
																	'phone',
														
																	// array(
																	// 	'name'=>'category_id',
																	// 	'value'=>$model->Category->name
																	// 	),

																	// array(
																	// 	'name'=>'subdistrict_id',
																	// 	'value'=>$model->Subdistrict->name
																	// 	),

																	array(
																		'name'=>'status',
																		'value'=>Useraccounts::model()->status($model->status)
																		),

																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

