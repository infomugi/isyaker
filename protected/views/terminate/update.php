<?php
/* @var $this TerminateController */
/* @var $model Terminate */

$this->breadcrumbs=array(
	'Terminates'=>array('index'),
	$model->id_terminate=>array('view','id'=>$model->id_terminate),
	'Edit',
	);

	$this->pageTitle='Edit Terminate';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>