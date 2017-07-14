<?php
/* @var $this CompanyEmployeeController */
/* @var $model CompanyEmployee */

$this->breadcrumbs=array(
	'Company Employees'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Karyawan Perusahaan';
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-info btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

				<?php echo CHtml::link('List Karyawan Perusahaan',
					array('index'),
					array('class' => 'btn btn-info btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'company-employee-grid',
						'dataProvider'=>$model->search(),
		//'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'created_date',
							'update_date',

							array(
								'name'=>'user_id',
								'value'=>'$data->Member->fullname'
								),
						

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



							<!-- Modal -->
							<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<!-- Popup Header -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title"><strong>View</strong> Karyawan Perusahaan</h4>
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


