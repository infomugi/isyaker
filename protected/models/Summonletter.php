<?php

/**
 * This is the model class for table "summonletter".
 *
 * The followings are the available columns in table 'summonletter':
 * @property integer $id_summonletter
 * @property string $created_date
 * @property integer $id_user
 * @property string $letter_code
 * @property integer $characteristic
 * @property integer $degree
 * @property integer $attachment
 * @property integer $asfor
 * @property integer $organization_id
 * @property string $letter_date
 * @property string $letter_time
 * @property integer $appear_to_one
 * @property integer $appear_to_two
 * @property integer $terminate_id
 * @property integer $status
 */
class Summonletter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'summonletter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, id_user, letter_code, characteristic, degree, attachment, asfor, organization_id, letter_date, letter_time, appear_to_one, appear_to_two, terminate_id, status', 'required'),
			array('id_user, characteristic, degree, asfor, organization_id, appear_to_one, appear_to_two, terminate_id, status', 'numerical', 'integerOnly'=>true),
			array('letter_code', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_summonletter, created_date, id_user, letter_code, characteristic, degree, attachment, asfor, organization_id, letter_date, letter_time, appear_to_one, appear_to_two, terminate_id, status', 'safe', 'on'=>'search'),
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
			'AppearOne'=>array(self::BELONGS_TO,'Useraccounts','appear_to_one'),
			'AppearTwo'=>array(self::BELONGS_TO,'Useraccounts','appear_to_two'),
			'Member'=>array(self::BELONGS_TO,'Useraccounts','id_user'),
			'Alliance'=>array(self::BELONGS_TO,'Alliance','organization_id'),
			'Terminate'=>array(self::BELONGS_TO,'Terminate','terminate_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_summonletter' => 'Id Summonletter',
			'created_date' => 'Tanggal Buat',
			'id_user' => 'Dibuat Oleh',
			'letter_code' => 'Nomor Surat Panggilan',
			'characteristic' => 'Sifat',
			'degree' => 'Derajat',
			'attachment' => 'Lampiran',
			'asfor' => 'Perihal',
			'organization_id' => 'Serikat Buruh',
			'letter_date' => 'Tanggal Panggilan',
			'letter_time' => 'Waktu Panggilan',
			'appear_to_one' => 'Menghadap 1',
			'appear_to_two' => 'Menghadap 2',
			'terminate_id' => 'Kode Surat MHI',
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

		$criteria->compare('id_summonletter',$this->id_summonletter);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('letter_code',$this->letter_code,true);
		$criteria->compare('characteristic',$this->characteristic);
		$criteria->compare('degree',$this->degree);
		$criteria->compare('attachment',$this->attachment);
		$criteria->compare('asfor',$this->asfor);
		$criteria->compare('organization_id',$this->organization_id);
		$criteria->compare('letter_date',$this->letter_date,true);
		$criteria->compare('letter_time',$this->letter_time,true);
		$criteria->compare('appear_to_one',$this->appear_to_one);
		$criteria->compare('appear_to_two',$this->appear_to_two);
		$criteria->compare('terminate_id',$this->terminate_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Summonletter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function asfor($data){
		if($data==1){
			return "Panggilan 1";
		}elseif($data==2){
			return "Panggilan 2";
		}elseif($data==3){
			return "Panggilan 3";
		}else{
			return "Tidak Diketahui";
		}
	}

	public function attachment($data){
		if($data==0){
			return "-";
		}
	}

	public function characteristic($data){
		if($data==1){
			return "Penting";
		}		
	}

	public function degree($data){
		if($data==1){
			return "Segera";
		}	
	}

	public function status($data){
		if($data==1){
			return "Hadir";
		}elseif($data==2){
			return "Tidak Hadir";			
		}else{
			return "Belum di Konfirmasi";
		}
	}		

	protected function beforeSave()
	{
		$this->created_date = date('Y-m-d h:m:s', strtotime($this->created_date));
		$this->letter_date = date('Y-m-d', strtotime($this->letter_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->letter_date = date('d-m-Y', strtotime($this->letter_date));
		return TRUE;
	}

	public function showDay($date){
		$tanggal = $date;
		$day = date('D', strtotime($tanggal));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
			);
		return $dayList[$day];
	}

}