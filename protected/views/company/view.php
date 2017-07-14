<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->name,
	);

$dataCompanyEmployee=new CActiveDataProvider('CompanyEmployee',array(
	'criteria'=>array(
		'condition'=>'company_id = '.$model->id_company,
		'order'=>'year ASC',
		)));

$this->pageTitle='Detail Company';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-info btn-flat','title'=>'Add Company'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-info btn-flat', 'title'=>'List Company'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-info btn-flat','title'=>'Manage Company'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_company,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Company'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_company,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Company'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-info btn-flat','title'=>'Add Company'));
									?>
									<?php echo CHtml::link('Add Employee',
										array('companyemployee/create', 'company'=>$model->id_company),
										array('class' => 'btn btn-info btn-flat','title'=>'Add Employee Company'));
										?>									
										<?php echo CHtml::link('List',
											array('index'),
											array('class' => 'btn btn-info btn-flat', 'title'=>'List Company'));
											?>
											<?php echo CHtml::link('Manage',
												array('admin'),
												array('class' => 'btn btn-info btn-flat','title'=>'Manage Company'));
												?>
												<?php echo CHtml::link('Edit', 
													array('update', 'id'=>$model->id_company,
														), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Company'));
														?>
														<?php echo CHtml::link('Delete', 
															array('delete', 'id'=>$model->id_company,
																),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Company'));
																?>

															</span>

															<HR>

																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(

																		'company_code',
																		'name',
																		'address',
																		'phone',
																		'klui',

																		array(
																			'name'=>'district_id',
																			'value'=>$model->District->name
																			),

																		// array(
																		// 	'name'=>'category_id',
																		// 	'value'=>Company::model()->category($model->category_id)
																		// 	),																	

																		array(
																			'name'=>'classification',
																			'value'=>Company::model()->classification($model->classification)
																			),

																		array(
																			'name'=>'type',
																			'value'=>Company::model()->category($model->type)
																			),	

																		array(
																			'name'=>'status',
																			'value'=>Useraccounts::model()->status($model->status),
																			),	

																		array(
																			'label'=>'Total Pekerja',
																			'value'=>Company::model()->countEmployee($model->Employee->employee_male,$model->Employee->employee_female,$model->Employee->employee_strange_male,$model->Employee->employee_strange_female,$model->Employee->year),
																			),																																						

																		),
																		)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-employee-grid',
	'dataProvider'=>$dataCompanyEmployee,
																	//'filter'=>$model,
	'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
				'style' => 'text-align: center;')),
		'year',
		'employee_male',
		'employee_female',
		'employee_strange_male',
		'employee_strange_female',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'buttons'=>array(
				'view'=>
				array(
					'url'=>'Yii::app()->createUrl("CompanyEmployee/view", array("id"=>$data->id_company_employee))',
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

