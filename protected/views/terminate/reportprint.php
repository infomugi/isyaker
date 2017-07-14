<?php
/* @var $this TerminateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terminates',
	);

$this->pageTitle='Daftar Mediator Hubungan Industri - '.Terminate::model()->status($status);
?>
					Status : <?php echo Terminate::model()->status($status); ?>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'terminate-grid',
								'dataProvider'=>$dataProvider,
								'summaryText'=>'',
								'itemsCssClass' => 'table-responsive table table-bordered table-vcenter',
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

							
