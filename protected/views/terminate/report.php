<?php
/* @var $this TerminateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terminates',
	);

$this->pageTitle='Daftar Mediator Hubungan Industri';
?>

<span class="visible-xs">

			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('reportprint'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Print Mediator'));
				?>

			</span> 

			<span class="hidden-xs">

						<?php echo CHtml::link('Print',
							array('reportprint'),
							array('class' => 'btn btn-warning btn-flat','title'=>'Print Mediasi'));
							?>

						</span>

						<HR>

						<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'terminate-grid',
								'dataProvider'=>$dataProvider,
								'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
								'columns'=>array(

									array(
										'header'=>'No',
										'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
										'htmlOptions'=>array('width'=>'10px', 
											'style' => 'text-align: center;')),

									array(
										'header'=>'Tanggal',
										'value'=>'$data->created_date'
										),

									array(
										'header'=>'Nama Perusahaan',
										'value'=>'$data->Company->name'
										),

									array(
										'header'=>'Nama Pekerja',
										'value'=>'$data->employee_name'
										),									


									array(
										'header'=>'Status',
										'filter'=>array('1'=>'Selesai','0'=>'Belum Selesai'),
										'value'=>'Terminate::model()->status($data->status)',
										),	

									array(
										'header'=>'Jenis Perselisihan',
										'filter'=>array('1'=>'PHK','2'=>'PHI','3'=>'HAK','4'=>'SPSB'),
										'value'=>'Terminate::model()->type($data->type)',
										),								

									),
									)); ?>

							
