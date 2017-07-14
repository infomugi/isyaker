<?php
/* @var $this RecomendedletterController */
/* @var $model Recomendedletter */

$this->breadcrumbs=array(
	'Surat Anjuran'=>array('index'),
	'Add',
	);

	$this->pageTitle='Buat Surat Anjuran';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>