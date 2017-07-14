<?php
/* @var $this AllianceController */
/* @var $model Alliance */

$this->breadcrumbs=array(
	'Alliances'=>array('index'),
	$model->name=>array('view','id'=>$model->id_alliance),
	'Edit',
	);

	$this->pageTitle='Edit Serikat';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>