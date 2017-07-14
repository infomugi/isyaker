<?php
/* @var $this SubdistrictController */
/* @var $model Subdistrict */

$this->breadcrumbs=array(
	'Subdistricts'=>array('index'),
	$model->name,
	);

$dataCompany=new CActiveDataProvider('Company',array(
	'criteria'=>array(
		'condition'=>'district_id = '.$model->id_subdistrict,
		'order'=>'name ASC',
		)));

$this->pageTitle='Detail Kecamatan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Kecamatan'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kecamatan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kecamatan'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_subdistrict,
						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Kecamatan'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_subdistrict,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kecamatan'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-warning btn-flat','title'=>'Add Kecamatan'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kecamatan'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kecamatan'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_subdistrict,
													), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Kecamatan'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_subdistrict,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Kecamatan'));
															?>

														</span>

														<HR>

															<div class="row">

																<div class="col-lg-6 col-xs-3">
																	<!-- small box -->
																	<div class="small-box bg-lime">
																		<div class="inner">
																			<h3>
																				<?php echo Yii::app()->db->createCommand("SELECT SUM(employee_female) FROM company_employee LEFT JOIN company ON company_employee.company_id=company.id_company where district_id=".$model->id_subdistrict."")->queryScalar();?>
																			</h3>
																			<p> 
																				Pekerja Wanita </BR>                                      
																			</p>
																		</div>

																	</div>
																</div><!-- ./col -->      


																<div class="col-lg-6 col-xs-3">
																	<!-- small box -->
																	<div class="small-box bg-lime">
																		<div class="inner">
																			<h3>
																				<?php echo Yii::app()->db->createCommand("SELECT SUM(employee_male) FROM company_employee LEFT JOIN company ON company_employee.company_id=company.id_company where district_id=".$model->id_subdistrict."")->queryScalar();?>
																			</h3>
																			<p> 
																				Pekerja Pria </BR>                                      
																			</p>
																		</div>

																	</div>
																</div><!-- ./col -->                


																<div class="col-lg-6 col-xs-3">
																	<!-- small box -->
																	<div class="small-box bg-lime">
																		<div class="inner">
																			<h3>
																				<?php echo Yii::app()->db->createCommand("SELECT SUM(employee_strange_male + employee_strange_female) FROM company_employee LEFT JOIN company ON company_employee.company_id=company.id_company where district_id=".$model->id_subdistrict."")->queryScalar();?>
																			</h3>
																			<p> 
																				Pekerja Asing </BR>                                      
																			</p>
																		</div>

																	</div>
																</div><!-- ./col -->  

																<div class="col-lg-6 col-xs-3">
																	<!-- small box -->
																	<div class="small-box bg-lime">
																		<div class="inner">
																			<h3>
																				<?php echo Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where district_id=".$model->id_subdistrict."")->queryScalar();?>
																			</h3>
																			<p> 
																				Perusahaan </BR>                                      
																			</p>
																		</div>

																	</div>
																</div><!-- ./col -->  



															</div>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'subdistrict_code',
																	'name',
																	array(
																		'name'=>'status',
																		'value'=>Useraccounts::model()->status($model->status),
																		),	

																	),
																	)); ?>

																	<H3><i class="fa fa-archive"></i> Klasifikasi Perusahaan</H3>
																	<?php $this->widget('zii.widgets.CDetailView', array(
																		'data'=>$model,
																		'htmlOptions'=>array("class"=>"table"),
																		'attributes'=>array(

																			array(
																				'label'=>'Besar',
																				'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=1 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																				'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=1 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																				),	

																			array(
																				'label'=>'Kecil',
																				'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=2 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																				'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=2 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																				),	

																			array(
																				'label'=>'Sedang',
																				'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=3 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																				'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=3 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																				),	

																			array(
																				'label'=>'Menengah',
																				'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=4 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																				'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=4 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																				),	

																			array(
																				'label'=>'< Kecil',
																				'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=4 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																				'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where type=4 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																				),	

																			),
																			)); ?>


																			<H3><i class="fa fa-archive"></i> Klasifikasi Badan Usaha</H3>
																			<?php $this->widget('zii.widgets.CDetailView', array(
																				'data'=>$model,
																				'htmlOptions'=>array("class"=>"table"),
																				'attributes'=>array(

																					array(
																						'label'=>'PMDN',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=1 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=1 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'Swasta Nasional',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=2 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=2 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'Perseorangan',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=3 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=3 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'PMA',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=4 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=4 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'BUMN',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=5 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=5 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'Koperasi',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=6 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=6 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'Join Vuture',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=7 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=7 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'Join Venture',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=8 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=8 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),	

																					array(
																						'label'=>'Perorangan',
																						'visible'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=9 AND district_id=".$model->id_subdistrict."")->queryScalar() != "0",
																						'value'=>Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company where classification=9 AND district_id=".$model->id_subdistrict."")->queryScalar(). " Perusahaan",
																						),																																												

																					),
																					)); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-grid',
	'dataProvider'=>$dataCompany,
																// 'filter'=>$model,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(

																	// array(
																	// 	'header'=>'No',
																	// 	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																	// 	'htmlOptions'=>array('width'=>'10px', 
																	// 		'style' => 'text-align: center;')),

		'company_code',
		'name',

																	// array(
																	// 	'name'=>'category_id',
																	// 	'value'=>'$data->Category->name'
																	// 	),

																	// array(
																	// 	'name'=>'subdistrict_id',
																	// 	'value'=>'$data->Subdistrict->name'
																	// 	),

		array(
			'name'=>'status',
			'filter'=>array('0'=>'Tidak Aktif','1'=>'Aktif'),
			'value'=>'Useraccounts::model()->status($data->status)'
			),		

																	// 'address',
																	// 'phone',

		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>
				array(
					'url'=>'Yii::app()->createUrl("Company/view", array("id"=>$data->id_company))',
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
	th{width:150px;}
</STYLE>

<!-- Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Popup Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><strong>View</strong> Company</h4>
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

