<?php
/* @var $this SummonletterController */
/* @var $model Summonletter */

$this->breadcrumbs=array(
	'Summonletters'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Surat Panggilan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>