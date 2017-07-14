<?php

/**
 * This is the model class for table "subdistrict".
 *
 * The followings are the available columns in table 'subdistrict':
 * @property integer $id_subdistrict
 * @property string $subdistrict_code
 * @property string $name
 * @property integer $status
 */
class Subdistrict extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subdistrict';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subdistrict_code, name, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('subdistrict_code', 'length', 'max'=>25),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_subdistrict, subdistrict_code, name, status', 'safe', 'on'=>'search'),
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
			'id_subdistrict' => 'Id Subdistrict',
			'subdistrict_code' => 'Kode Kecamatan',
			'name' => 'Nama Kecamatan',
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

		$criteria->compare('id_subdistrict',$this->id_subdistrict);
		$criteria->compare('subdistrict_code',$this->subdistrict_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subdistrict the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateSubdistrictCode(){
		$_i = "K";
		$_left = $_i;
		$_first = "00001";
		$_len = strlen($_left);
		$no = $_left . $_first; 
		
		$last_po = $this->find( 
				array(
					"select"=>"subdistrict_code",
					"condition" => "left(subdistrict_code, " . $_len . ") = :_left",
					"params" => array(":_left" => $_left),
					"order" => "id_subdistrict DESC"
				));
		
		if($last_po != null){
			$_no = substr($last_po->subdistrict_code, $_len);
			$_no++;
			$_no = substr("000000", strlen($_no)) . $_no;
			$no = $_left . $_no;
		}
		
		return $no;
		}		
}
