<?php
/* @var $this GroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groups',
	);

$this->pageTitle='Assignments Project';
?>

	<?php echo CHtml::link('Add Groups',
		array('create'),
		array('class' => 'btn btn-warning btn-flat'));
		?>
		<?php echo CHtml::link('Manage Groups',
			array('admin'),
			array('class' => 'btn btn-warning btn-flat'));
			?>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

