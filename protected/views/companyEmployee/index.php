<?php
/* @var $this CompanyEmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Company Employees',
	);

$this->pageTitle='List Karyawan Perusahaan';
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-info btn-flat', 'title'=>'List Karyawan Perusahaan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-info btn-flat','title'=>'Manage Karyawan Perusahaan'));
				?>

			</span> 

			<span class="hidden-xs">

					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-info btn-flat', 'title'=>'List Karyawan Perusahaan'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-info btn-flat','title'=>'Manage Karyawan Perusahaan'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

