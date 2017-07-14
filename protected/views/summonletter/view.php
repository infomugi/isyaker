<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */

$this->breadcrumbs=array(
	'Summonletters'=>array('index'),
	$model->id_summonletter,
	);

$this->pageTitle='Surat Panggilan Ke-'.$model->asfor;
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Surat Panggilan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Surat Panggilan'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_summonletter,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Surat Panggilan'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_summonletter,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Surat Panggilan'));
								?>

							</span> 

							<span class="hidden-xs">

									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Surat Panggilan'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Surat Panggilan'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_summonletter,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Surat Panggilan'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_summonletter,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Surat Panggilan'));
															?>
													<?php echo CHtml::link('Print', 
														array('print', 'id'=>$model->id_summonletter,
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
																		'value'=>Summonletter::model()->asfor($model->asfor)
																		),

																	array(
																		'name'=>'organization_id',
																		'value'=>$model->Alliance->name
																		),

																	'letter_date',
																	'letter_time',

																	array(
																		'name'=>'appear_to_one',
																		'value'=>$model->AppearOne->fullname
																		),

																	array(
																		'name'=>'appear_to_two',
																		'value'=>$model->AppearTwo->fullname
																		),


																	array(
																		'label'=>'Kode Mediasi',
																		'value'=>$model->Terminate->terminate_code
																		),		

																	array(
																		'name'=>'status',
																		'value'=>Summonletter::model()->status($model->status)
																		),

																	),
																	)); ?>

<STYLE>
	th{width:150px;}
</STYLE>

