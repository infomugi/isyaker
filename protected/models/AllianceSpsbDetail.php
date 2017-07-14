<?php

/**
 * This is the model class for table "alliance_spsb_detail".
 *
 * The followings are the available columns in table 'alliance_spsb_detail':
 * @property integer $id_alliance_spsb_detail
 * @property string $created_date
 * @property integer $total_male
 * @property integer $total_female
 * @property string $alliance_spsb_detail_code
 * @property string $start_date
 * @property string $expire_date
 * @property integer $status
 */
class AllianceSpsbDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alliance_spsb_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, total_male, total_female, alliance_spsb_detail_code, start_date, expire_date, status', 'required'),
			array('total_male, total_female, status', 'numerical', 'integerOnly'=>true),
			array('alliance_spsb_detail_code', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_alliance_spsb_detail, created_date, total_male, total_female, alliance_spsb_detail_code, start_date, expire_date, status', 'safe', 'on'=>'search'),
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
			'id_alliance_spsb_detail' => 'Id Alliance Spsb Detail',
			'created_date' => 'Created Date',
			'total_male' => 'Total Male',
			'total_female' => 'Total Female',
			'alliance_spsb_detail_code' => 'Alliance Spsb Detail Code',
			'start_date' => 'Start Date',
			'expire_date' => 'Expire Date',
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

		$criteria->compare('id_alliance_spsb_detail',$this->id_alliance_spsb_detail);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('total_male',$this->total_male);
		$criteria->compare('total_female',$this->total_female);
		$criteria->compare('alliance_spsb_detail_code',$this->alliance_spsb_detail_code,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('expire_date',$this->expire_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AllianceSpsbDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
