<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categories',
	);

$this->pageTitle='List Kategori';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-warning btn-flat','title'=>'Add Kategori'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kategori'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kategori'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-warning btn-flat','title'=>'Add Kategori'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-warning btn-flat', 'title'=>'List Kategori'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-warning btn-flat','title'=>'Manage Kategori'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

