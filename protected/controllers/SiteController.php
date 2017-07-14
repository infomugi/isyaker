<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
				),
			);
	}


	public function actionIndex()
	{
		if(!Yii::app()->user->isGuest) {
			$this->render('index');
		} else {
			$this->layout = "frontend";
			$this->render('frontend');
			
		}
	}

	public function actionSite()
	{
			$this->layout = "frontend";
			$this->render('frontend');
	}	

	public function actionEreport()
	{
			$this->layout = "frontend";
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
			$model->status=0;
			$model->terminate_code = Terminate::model()->generateTerminateCode();

			$employee->name = $model->employee_name;
			$employee->address = $model->employee_address;
			$employee->phone = $model->employee_phone;
			$employee->employee_code = Employee::model()->generateEmployeeCode();			

			if($model->save() && $employee->save())
				$this->redirect(array('site/index'));
		}

		$this->render('ereport',array(
			'model'=>$model,
		));			
	}	


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
				"Reply-To: {$model->email}\r\n".
				"MIME-Version: 1.0\r\n".
				"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		$this->layout = "signin";

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionReport()
	{
		if(!YII::app()->user->isGuest){

			$project='SELECT count(id_project), DATE_FORMAT(start_date,"%d %M %Y") AS cc, DATE_FORMAT(start_date,"%M %Y") AS dd FROM project where status=0 GROUP BY DATE_FORMAT(start_date,"%M %Y") ORDER BY start_date DESC';
			$dataProject=new CSqlDataProvider($project,array(
				'keyField' => 'id',
				));		

			// $job='SELECT count(id_projectdetail), DATE_FORMAT(job_date,"%d %M %Y") AS aa, DATE_FORMAT(job_date,"%M %Y") AS bb FROM projectdetail GROUP BY DATE_FORMAT(job_date,"%M %Y") ORDER BY job_date ASC';
			// $dataProvider=new CSqlDataProvider($job,array(
			// 	'keyField' => 'id',
			// 	));

			// $invoice='SELECT count(id_invoice), DATE_FORMAT(invoice_date,"%d %M %Y") AS ee, DATE_FORMAT(invoice_date,"%M %Y") AS ff FROM invoice GROUP BY DATE_FORMAT(invoice_date,"%M %Y") ORDER BY invoice_date ASC';
			// $dataInvoice=new CSqlDataProvider($invoice,array(
			// 	'keyField' => 'id',
			// 	));		

			// $tasks='SELECT count(id_task), DATE_FORMAT(start_date,"%d %M %Y") AS gg, DATE_FORMAT(start_date,"%M %Y") AS hh FROM tasks GROUP BY DATE_FORMAT(start_date,"%M %Y") ORDER BY start_date ASC';
			// $dataTasks=new CSqlDataProvider($tasks,array(
			// 	'keyField' => 'id',
			// 	));											

			$this->render('report',array(
				'dataProject'=>$dataProject,
				// 'dataProvider'=>$dataProvider,
				// 'dataInvoice'=>$dataInvoice,
				// 'dataTasks'=>$dataTasks,
				));
		}else{
			$this->actionLogin();
		}
	}	

	public function actionHelp()
	{
		if(!YII::app()->user->isGuest){
			$this->render('help');
		}else{
			$this->actionLogin();
		}
	}	
}