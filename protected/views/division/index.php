<?php
/* @var $this DivisionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Divisions',
	);

$this->pageTitle='List Kantor Bagian';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Kantor Bagian'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kantor Bagian'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kantor Bagian'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-warning btn-flat','title'=>'Add Division'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-warning btn-flat', 'title'=>'List Division'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-warning btn-flat','title'=>'Manage Division'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

