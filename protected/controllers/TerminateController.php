<?php

class TerminateController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index','enable','disable','report','reportprint'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('view','index','reportprint','reporttype'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
				),			
			array('deny',
				'users'=>array('*'),
				),
			);
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if(Yii::app()->request->isAjaxRequest)
		{
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
				), false, true);
		}
		else
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Terminate;
		// $company=new Company;
		$employee=new Employee;
		$model->setScenario('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Terminate']))
		{
			$model->attributes=$_POST['Terminate'];
			$model->id_user = YII::app()->user->id;
			$model->created_date = date('Y-m-d h:i:s');
			$model->update_date = date('Y-m-d h:i:s');	
			$model->terminate_code = Terminate::model()->generateTerminateCode();

			// $company->name = $model->company_name;
			// $company->address = $model->company_address;
			// $company->phone = $model->company_phone;
			// $company->company_code = Company::model()->generateCompanyCode();

			$employee->name = $model->employee_name;
			$employee->address = $model->employee_address;
			$employee->phone = $model->employee_phone;
			$employee->employee_code = Employee::model()->generateEmployeeCode();			

			if($model->save() && $employee->save())
				$this->redirect(array('view','id'=>$model->id_terminate));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->setScenario('update');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Terminate']))
		{
			$model->attributes=$_POST['Terminate'];
			$model->update_date = date('Y-m-d h:i:s');			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_terminate));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Terminate');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionReport()
	{
		$dataProvider=new CActiveDataProvider('Terminate');
		$this->render('report',array(
			'dataProvider'=>$dataProvider,
		));
	}	

	public function actionReportPrint($status)
	{
		$this->layout = "print_header";
		$dataProvider=new CActiveDataProvider('Terminate',array(
			'criteria'=>array(
				'condition'=>'status = '.$status,
				'order'=>'created_date DESC',
				)));
		$this->render('reportprint',array(
			'dataProvider'=>$dataProvider,
			'status'=>$status
		));
	}	

	public function actionReportType($type)
	{
		$this->layout = "print_header";
		$dataProvider=new CActiveDataProvider('Terminate',array(
			'criteria'=>array(
				'condition'=>'type = '.$type,
				'order'=>'created_date DESC',
				)));
		$this->render('reporttype',array(
			'dataProvider'=>$dataProvider,
			'type'=>$type
		));
	}			

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Terminate('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Terminate']))
			$model->attributes=$_GET['Terminate'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Terminate the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Terminate::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Terminate $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='terminate-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionEnable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		$this->redirect(array('index'));
	}	

	public function actionDisable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		$this->redirect(array('index'));
	}			
}
