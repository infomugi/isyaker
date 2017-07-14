<?php
/* @var $this SubdistrictController */
/* @var $model Subdistrict */

$this->breadcrumbs=array(
	'Subdistricts'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Kecamatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>