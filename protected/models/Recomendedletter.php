<?php

/**
 * This is the model class for table "recomendedletter".
 *
 * The followings are the available columns in table 'recomendedletter':
 * @property integer $id_recomendedletter
 * @property string $created_date
 * @property integer $id_user
 * @property string $letter_code
 * @property integer $characteristic
 * @property integer $degree
 * @property integer $attachment
 * @property integer $asfor
 * @property integer $organization_id
 * @property integer $terminate_id
 * @property string $employee_description
 * @property string $company_description
 * @property string $recomended_mediator
 * @property string $recomended_descriptio
 * @property integer $status
 * @property string $letter_code_alliance
 * @property string $letter_date_alliance
 */
class Recomendedletter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recomendedletter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, id_user, letter_code, characteristic, degree, attachment, asfor, organization_id, terminate_id, employee_description, company_description, recomended_mediator, recomended_descriptio, status', 'required'),
			array('id_user, characteristic, degree, attachment, asfor, organization_id, terminate_id, status', 'numerical', 'integerOnly'=>true),
			array('letter_code', 'length', 'max'=>25),
			array('letter_code_alliance, letter_date_alliance', 'length', 'max'=>100),
			array('letter_code','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_recomendedletter, created_date, id_user, letter_code, characteristic, degree, attachment, asfor, organization_id, terminate_id, employee_description, company_description, recomended_mediator, recomended_descriptio, status', 'safe', 'on'=>'search'),
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
			'letter_code' => 'Nomor Surat Anjuran',
			'characteristic' => 'Sifat',
			'degree' => 'Derajat',
			'attachment' => 'Lampiran',
			'asfor' => 'Perihal',
			'organization_id' => 'Serikat Buruh',
			'terminate_id' => 'Kode Surat MHI',
			'status' => 'Status',
			'employee_description' => 'Keterangan Pihak Pekerja',
			'company_description' => 'Keterangan Pihak Perusaan',
			'recomended_mediator' => 'Pendapat dan Anjuran',
			'recomended_descriptio' => 'Menganjurkan',
			'letter_code_alliance' => 'Kode Surat Serikat',
			'letter_date_alliance' => 'Tanggal Surat Serikat',
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

		$criteria->compare('id_recomendedletter',$this->id_recomendedletter);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('letter_code',$this->letter_code,true);
		$criteria->compare('characteristic',$this->characteristic);
		$criteria->compare('degree',$this->degree);
		$criteria->compare('attachment',$this->attachment);
		$criteria->compare('asfor',$this->asfor);
		$criteria->compare('organization_id',$this->organization_id);
		$criteria->compare('terminate_id',$this->terminate_id);
		$criteria->compare('employee_description',$this->employee_description,true);
		$criteria->compare('company_description',$this->company_description,true);
		$criteria->compare('recomended_mediator',$this->recomended_mediator,true);
		$criteria->compare('recomended_descriptio',$this->recomended_descriptio,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Recomendedletter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->created_date = date('Y-m-d h:m:s', strtotime($this->created_date));
		$this->letter_date_alliance = date('Y-m-d h:m:s', strtotime($this->letter_date_alliance));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->letter_date_alliance = date('d-m-Y', strtotime($this->letter_date_alliance));
		return TRUE;
	}	

	public function asfor($data){
		if($data==1){
			return "Anjuran Penyelesaian PHK";
		}else{
			return "Tidak Diketahui";
		}
	}	
}
