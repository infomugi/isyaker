<?php
/* @var $this AlliancespsbController */
/* @var $model AllianceSpsb */

$this->breadcrumbs=array(
	'Alliance Spsbs'=>array('index'),
	$model->id_alliance_spsb,
	);

	$this->pageTitle='Detail AllianceSpsb';
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
		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
	 array('update', 'id'=>$model->id_alliance_spsb,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit AllianceSpsb'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
	 array('delete', 'id'=>$model->id_alliance_spsb,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus AllianceSpsb'));
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
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_alliance_spsb,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit AllianceSpsb'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_alliance_spsb,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus AllianceSpsb'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_alliance_spsb',
		'created_date',
		'update_date',
		'id_user',
		'company_id',
		'alliance_id',
		'affiliate_id',
		'status',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

