<?php
/* @var $this AllianceController */
/* @var $model Alliance */

$this->breadcrumbs=array(
	'Alliances'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Serikat';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>