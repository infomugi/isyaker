<?php
/* @var $this CompanyEmployeeController */
/* @var $model CompanyEmployee */

$this->breadcrumbs=array(
	'Company Employees'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Pekerja Perusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>