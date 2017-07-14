<?php

/**
 * This is the model class for table "terminate".
 *
 * The followings are the available columns in table 'terminate':
 * @property integer $id_terminate
 * @property integer $id_user
 * @property string $created_date
 * @property string $update_date
 * @property string $company_id
 * @property string $employee_name
 * @property string $employee_address
 * @property string $employee_phone
 * @property integer $subdistrict
 * @property integer $totalMale
 * @property integer $totalFemale
 * @property integer $type
 * @property integer $result
 * @property string $description
 * @property integer $status
 */
class Terminate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'terminate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, created_date, update_date, company_id, employee_name, employee_address, employee_phone, subdistrict, totalMale, totalFemale, type, description, status', 'required','on'=>'create'),
			array('result, status', 'required','on'=>'update'),
			array('id_user, company_id, subdistrict, totalMale, totalFemale, type, status', 'numerical', 'integerOnly'=>true),
			array('employee_name', 'length', 'max'=>100),
			array('employee_phone', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_terminate, id_user, created_date, update_date, employee_name, employee_address, employee_phone, subdistrict, totalMale, totalFemale, type, result, description, status', 'safe', 'on'=>'search'),
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
			'Company'=>array(self::BELONGS_TO,'company','company_id'),
			'Subdistrict'=>array(self::BELONGS_TO,'subdistrict','subdistrict'),
			'Member'=>array(self::BELONGS_TO,'Useraccounts','id_user')
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_terminate' => 'Id Terminate',
			'id_user' => 'Dibuat Oleh',
			'created_date' => 'Tanggal Buat',
			'update_date' => 'Tanggal Update',
			'terminate_code'=>'Kode Surat',
			'company_id' => 'Nama Perusahaan',
			'employee_name' => 'Nama Pekerja',
			'employee_address' => 'Alamat Pekerja',
			'employee_phone' => 'No. Telp Pekerja',
			'subdistrict' => 'Kecamatan',
			'totalMale' => 'Jumlah PHK Pria',
			'totalFemale' => 'Jumlah PHK Wanita',
			'type' => 'Jenis Perselisihan',
			'result' => 'Hasil Penyelesaian',
			'description' => 'Keterangan',
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

		$criteria->compare('id_terminate',$this->id_terminate);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('company_id',$this->company_id,true);
		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('employee_address',$this->employee_address,true);
		$criteria->compare('employee_phone',$this->employee_phone,true);
		$criteria->compare('subdistrict',$this->subdistrict);
		$criteria->compare('totalMale',$this->totalMale);
		$criteria->compare('totalFemale',$this->totalFemale);
		$criteria->compare('type',$this->type);
		$criteria->compare('result',$this->result);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Terminate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateTerminateCode(){
		$_i = "SPD/PHK/".date('m')."/";
		$_left = $_i;
		$_first = "00001";
		$_len = strlen($_left);
		$no = $_left . $_first; 
		
		$last_po = $this->find( 
			array(
				"select"=>"terminate_code",
				"condition" => "left(terminate_code, " . $_len . ") = :_left",
				"params" => array(":_left" => $_left),
				"order" => "id_terminate DESC"
				));
		
		if($last_po != null){
			$_no = substr($last_po->terminate_code, $_len);
			$_no++;
			$_no = substr("000000", strlen($_no)) . $_no;
			$no = $_left . $_no;
		}
		
		return $no;
	}	

	public function type($data){
		if($data==1){
			return "PHK";
		}else{
			return "PHI";
		}
	}

	public function status($data){
		if($data==1){
			return "Selesai";
		}else{
			return "Dalam Proses";
		}
	}	
}
