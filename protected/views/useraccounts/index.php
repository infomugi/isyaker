<?php
/* @var $this UseraccountsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Useraccounts'=>array('index'),
	'Index',
	);
	?>

		<?php 
		echo CHtml::link('Add Account',
			array('create'),
			array('class' => 'btn btn-flat btn-warning'));
			?>

			<?php
			echo CHtml::link('Manage Accounts',
				array('admin'),
				array('class' => 'btn btn-flat btn-warning'));
				?>

				<HR>

					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						)); ?>


