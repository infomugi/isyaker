<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id_employee
 * @property string $employee_code
 * @property string $name
 * @property string $address
 * @property string $phone
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_code, name, address, phone', 'required'),
			array('employee_code', 'length', 'max'=>30),
			array('name', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_employee, employee_code, name, address, phone', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_employee' => 'Id Employee',
			'employee_code' => 'Kode Pekerja',
			'name' => 'Nama Pekerja',
			'address' => 'Alamat',
			'phone' => 'Telepon',
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

		$criteria->compare('id_employee',$this->id_employee);
		$criteria->compare('employee_code',$this->employee_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateEmployeeCode(){
		$_i = "E";
		$_left = $_i;
		$_first = "00001";
		$_len = strlen($_left);
		$no = $_left . $_first; 
		
		$last_po = $this->find( 
				array(
					"select"=>"employee_code",
					"condition" => "left(employee_code, " . $_len . ") = :_left",
					"params" => array(":_left" => $_left),
					"order" => "id_employee DESC"
				));
		
		if($last_po != null){
			$_no = substr($last_po->employee_code, $_len);
			$_no++;
			$_no = substr("000000", strlen($_no)) . $_no;
			$no = $_left . $_no;
		}
		
		return $no;
		}	
}
