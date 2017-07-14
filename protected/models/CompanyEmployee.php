<?php

/**
 * This is the model class for table "company_employee".
 *
 * The followings are the available columns in table 'company_employee':
 * @property integer $id_company_employee
 * @property string $created_date
 * @property string $update_date
 * @property integer $user_id
 * @property integer $company_id
 * @property string $year 
 * @property integer $employee_male
 * @property integer $employee_female
 * @property integer $employee_strange_male
 * @property integer $employee_strange_female
 * @property integer $status
 */
class CompanyEmployee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, update_date, user_id, company_id, year, employee_male, employee_female, employee_strange_male, employee_strange_female, status', 'required'),
			array('user_id, company_id, employee_male, employee_female, employee_strange_male, employee_strange_female, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_company_employee, created_date, update_date, user_id, company_id, employee_male, employee_female, employee_strange_male, employee_strange_female, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Member'=>array(self::BELONGS_TO,'useraccounts','user_id'),
			'Company'=>array(self::BELONGS_TO,'company','company_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_company_employee' => 'Id Company Employee',
			'created_date' => 'Tanggal di Buat',
			'update_date' => 'Tanggal di Perbaharui',
			'user_id' => 'Diinput Oleh',
			'company_id' => 'Nama Perusahaan',
			'year' => 'Tahun',
			'employee_male' => 'WNI Pria',
			'employee_female' => 'WNI Wanita',
			'employee_strange_male' => 'WNA Pria',
			'employee_strange_female' => 'WNA Wanita',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_company_employee',$this->id_company_employee);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('employee_male',$this->employee_male);
		$criteria->compare('employee_female',$this->employee_female);
		$criteria->compare('employee_strange_male',$this->employee_strange_male);
		$criteria->compare('employee_strange_female',$this->employee_strange_female);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompanyEmployee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->created_date = date('Y-m-d h:m:s', strtotime($this->created_date));
		$this->update_date = date('Y-m-d', strtotime($this->update_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->update_date = date('d-m-Y', strtotime($this->update_date));
		return TRUE;
	}

}
