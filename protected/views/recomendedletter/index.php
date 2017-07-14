<?php
/* @var $this RecomendedletterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surat Anjuran',
	);

$this->pageTitle='List Surat Anjuran';
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-info btn-flat', 'title'=>'List Surat Anjuran'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-info btn-flat','title'=>'Manage Surat Anjuran'));
				?>

			</span> 

			<span class="hidden-xs">

					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-info btn-flat', 'title'=>'List Surat Anjuran'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-info btn-flat','title'=>'Manage Surat Anjuran'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

