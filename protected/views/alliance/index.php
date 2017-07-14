<?php
/* @var $this AllianceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alliances',
	);

$this->pageTitle='List Serikat';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Serikat'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Serikat'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Serikat'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-warning btn-flat','title'=>'Add Serikat'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-warning btn-flat', 'title'=>'List Serikat'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-warning btn-flat','title'=>'Manage Serikat'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

