<?php
/* @var $this AlliancespsbController */
/* @var $model AllianceSpsb */

$this->breadcrumbs=array(
	'Alliance Spsbs'=>array('index'),
	$model->id_alliance_spsb=>array('view','id'=>$model->id_alliance_spsb),
	'Edit',
	);

	$this->pageTitle='Edit AllianceSpsb';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>