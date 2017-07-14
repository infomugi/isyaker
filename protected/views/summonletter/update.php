<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */

$this->breadcrumbs=array(
	'Summonletters'=>array('index'),
	$model->id_summonletter=>array('view','id'=>$model->id_summonletter),
	'Edit',
	);

	$this->pageTitle='Edit Summonletter';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>