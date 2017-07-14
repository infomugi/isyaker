<?php
/* @var $this RecomendedletterController */
/* @var $model Recomendedletter */

$this->breadcrumbs=array(
	'Recomendedletters'=>array('index'),
	$model->id_recomendedletter=>array('view','id'=>$model->id_recomendedletter),
	'Edit',
	);

	$this->pageTitle='Edit Surat Anjuran';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>