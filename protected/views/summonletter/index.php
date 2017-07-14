<?php
/* @var $this SummonletterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surat Panggilans',
	);

$this->pageTitle='List Surat Panggilan';
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-warning btn-flat', 'title'=>'List Surat Panggilan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Manage Surat Panggilan'));
				?>

			</span> 

			<span class="hidden-xs">

					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-warning btn-flat', 'title'=>'List Surat Panggilan'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-warning btn-flat','title'=>'Manage Surat Panggilan'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

