<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Kantor Bagian';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>