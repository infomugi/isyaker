<?php
/* @var $this SubdistrictController */
/* @var $model Subdistrict */

$this->breadcrumbs=array(
	'Subdistricts'=>array('index'),
	$model->name=>array('view','id'=>$model->id_subdistrict),
	'Edit',
	);

	$this->pageTitle='Edit Kecamatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>