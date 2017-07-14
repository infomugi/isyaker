<?php
/* @var $this AlliancespsbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alliance Spsbs',
	);

	$this->pageTitle='List AllianceSpsb';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
	 array('create'),
 array('class' => 'btn btn-info btn-flat','title'=>'Add AllianceSpsb'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
	 array('index'),
 array('class' => 'btn btn-info btn-flat', 'title'=>'List AllianceSpsb'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
	 array('admin'),
 array('class' => 'btn btn-info btn-flat','title'=>'Manage AllianceSpsb'));
		 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-info btn-flat','title'=>'Add AllianceSpsb'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-info btn-flat', 'title'=>'List AllianceSpsb'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-info btn-flat','title'=>'Manage AllianceSpsb'));
		 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>

