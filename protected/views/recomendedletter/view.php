<?php
/* @var $this RecomendedletterController */
/* @var $model Recomendedletter */

$this->breadcrumbs=array(
	'Recomendedletters'=>array('index'),
	$model->id_recomendedletter,
	);

$this->pageTitle='Detail Surat Anjuran';
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Surat Anjuran'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Surat Anjuran'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_recomendedletter,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Surat Anjuran'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_recomendedletter,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Surat Anjuran'));
								?>

							</span> 

							<span class="hidden-xs">

									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Surat Anjuran'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Surat Anjuran'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_recomendedletter,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Surat Anjuran'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_recomendedletter,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Surat Anjuran'));
															?>
															<?php echo CHtml::link('Print', 
																array('print', 'id'=>$model->id_recomendedletter,
																	),  array('class' => 'btn btn-success btn-flat', 'title'=>'Print Surat Panggilan'));
																	?>	

																</span>

																<HR>

																	<?php $this->widget('zii.widgets.CDetailView', array(
																		'data'=>$model,
																		'htmlOptions'=>array("class"=>"table"),
																		'attributes'=>array(
																			'created_date',

																			array(
																				'name'=>'id_user',
																				'value'=>$model->Member->fullname
																				),

																			'letter_code',

																			array(
																				'name'=>'characteristic',
																				'value'=>Summonletter::model()->characteristic($model->characteristic)
																				),

																			array(
																				'name'=>'degree',
																				'value'=>Summonletter::model()->degree($model->degree)
																				),

																			array(
																				'name'=>'attachment',
																				'value'=>Summonletter::model()->attachment($model->attachment)
																				),

																			array(
																				'name'=>'asfor',
																				'value'=>Recomendedletter::model()->asfor($model->asfor)
																				),
																			
																			array(
																				'name'=>'organization_id',
																				'value'=>$model->Alliance->name
																				),

																			// 'employee_description',
																			// 'company_description',
																			// 'recomended_mediator',
																			// 'recomended_descriptio',
																			),
																			)); ?>

<STYLE>
	th{width:150px;}
</STYLE>

