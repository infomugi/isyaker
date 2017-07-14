<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Kategori';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Kategori'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kategori'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kategori'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_category,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Kategori'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_category,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kategori'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-warning btn-flat','title'=>'Add Kategori'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kategori'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kategori'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_category,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Kategori'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_category,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kategori'));
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
																		),
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

