<?php
/* @var $this CompanyEmployeeController */
/* @var $model CompanyEmployee */

$this->breadcrumbs=array(
	'Company Employees'=>array('index'),
	$model->id_company_employee=>array('view','id'=>$model->id_company_employee),
	'Edit',
	);

	$this->pageTitle='Edit CompanyEmployee';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>