<?php
/* @var $this SummonletterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surat Panggilans',
	);

$this->pageTitle='List Surat Panggilan';
?>

<span class="visible-xs">

			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-warning btn-flat','title'=>'Print Surat Panggilan'));
				?>

			</span> 

			<span class="hidden-xs">

						<?php echo CHtml::link('Print',
							array('admin'),
							array('class' => 'btn btn-warning btn-flat','title'=>'Print Surat Panggilan'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

