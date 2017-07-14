<?php

class SettingsController extends Controller
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
				'actions'=>array('view','general','paypal','logo','favicon','theme'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('deny',
				'actions'=>array('view','general','paypal','logo','favicon','theme'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionGeneral($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_settings));
		}

		$this->render('general',array(
			'model'=>$model,
		));
	}

	public function actionPaypal($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_settings));
		}

		$this->render('paypal',array(
			'model'=>$model,
		));
	}	

	public function actionLogo($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'logo'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'logo'); 
				$model->logo=$model->id_settings.'-'.$model->system_name.'.'.$tmp->extensionName; 
			}

			if($model->save())
				if(strlen(trim($model->logo)) > 0) 
				$tmp->saveAs(Yii::getPathOfAlias('webroot').'/dokumen/logo/'.$model->logo);
				$this->redirect(array('view','id'=>$model->id_settings));
			}
	

		$this->render('logo',array(
			'model'=>$model,
		));
	}

	public function actionFavicon($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'favicon'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'favicon'); 
				$model->favicon=$model->id_settings.'-'.$model->system_name.'.'.$tmp->extensionName; 
			}

			if($model->save())
				if(strlen(trim($model->favicon)) > 0) 
				$tmp->saveAs(Yii::getPathOfAlias('webroot').'/dokumen/favicon/'.$model->favicon);
				$this->redirect(array('view','id'=>$model->id_settings));
			}

		$this->render('favicon',array(
			'model'=>$model,
		));
	}

	public function actionTheme($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_settings));
		}

		$this->render('theme',array(
			'model'=>$model,
		));
	}		

	public function actionLogHistory()
	{
		$dataProvider=new CActiveDataProvider('Useraccounts',array(
			'criteria'=>array(
				'condition'=>'status = 1',
				'order'=>'visit_time DESC',
				)));

		$this->render('loghistory',array(
			'dataProvider'=>$dataProvider,
			));
	}					

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Settings the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Settings::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Settings $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='settings-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
