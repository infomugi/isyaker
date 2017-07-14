<?php
/* @var $this SubdistrictController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subdistricts',
	);

$this->pageTitle='List Kecamatan';
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

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

