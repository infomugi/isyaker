<?php
/* @var $this SettingsController */
/* @var $model Settings */

$this->breadcrumbs=array(
	'System Settings'=>array('index'),
	"General",
	);

$this->pageTitle='System Settings';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('<i class="fa fa-edit"></i> General', 
		array('general', 'id'=>$model->id_settings,
			), array('class' => 'btn btn-warning btn-flat'));
			?>
					<?php echo CHtml::link('<i class="fa fa-camera"></i> Logo', 
						array('logo', 'id'=>$model->id_settings,
							), array('class' => 'btn btn-warning btn-flat'));
							?>		

							<?php echo CHtml::link('<i class="fa fa-square"></i> Favicon', 
								array('favicon', 'id'=>$model->id_settings,
									), array('class' => 'btn btn-warning btn-flat'));
									?>	

									<?php echo CHtml::link('<i class="fa fa-dashboard"></i> Theme', 
										array('theme', 'id'=>$model->id_settings,
											), array('class' => 'btn btn-warning btn-flat'));
											?>		

											<?php echo CHtml::link('<i class="fa fa-desktop"></i> Log History', 
												array('loghistory',
													), array('class' => 'btn btn-warning btn-flat'));
													?>																					

													<HR>

														<H3>General</H3>
														<?php $this->widget('zii.widgets.CDetailView', array(
															'data'=>$model,
															'htmlOptions'=>array("class"=>"table"),
															'attributes'=>array(
																'system_name',
																'system_title',
																'address',
																'phone',
																'system_email',
																'language',
																'theme',
																),
																)); ?>

															</BR>
																<H3>Logo & Favicons</H3>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(
																		'logo',
																		'favicon',
																		),
																		)); ?>														

																	</section>

																	<STYLE>
																		th{width:150px;}
																	</STYLE>

