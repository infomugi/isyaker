<?php

/**
 * This is the model class for table "alliance".
 *
 * The followings are the available columns in table 'alliance':
 * @property integer $id_alliance
 * @property string $alliance_code
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property integer $category_id
 * @property integer $subdistrict_id
 * @property integer $status
 */
class Alliance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alliance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alliance_code, name, category_id, subdistrict_id, address, phone, status', 'required'),
			array('category_id, subdistrict_id, status', 'numerical', 'integerOnly'=>true),
			array('alliance_code', 'length', 'max'=>30),
			array('name', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_alliance, alliance_code, name, address, phone, category_id, subdistrict_id, status', 'safe', 'on'=>'search'),
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
			'Category'=>array(self::BELONGS_TO,'category','category_id'),
			'Subdistrict'=>array(self::BELONGS_TO,'subdistrict','subdistrict_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alliance' => 'Id Serikat Buruh',
			'alliance_code' => 'Kode Serikat',
			'name' => 'Nama Serikat',
			'address' => 'Alamat',
			'phone' => 'Telepon',
			'category_id' => 'Ketegori',
			'subdistrict_id' => 'Kecamatan',
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

		$criteria->compare('id_alliance',$this->id_alliance);
		$criteria->compare('alliance_code',$this->alliance_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('subdistrict_id',$this->subdistrict_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alliance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateAllianceCode(){
		$_i = "S";
		$_left = $_i;
		$_first = "00001";
		$_len = strlen($_left);
		$no = $_left . $_first; 
		
		$last_po = $this->find( 
				array(
					"select"=>"alliance_code",
					"condition" => "left(alliance_code, " . $_len . ") = :_left",
					"params" => array(":_left" => $_left),
					"order" => "id_alliance DESC"
				));
		
		if($last_po != null){
			$_no = substr($last_po->alliance_code, $_len);
			$_no++;
			$_no = substr("000000", strlen($_no)) . $_no;
			$no = $_left . $_no;
		}
		
		return $no;
		}	

    public static function getAlliance(){
    	$sql = "SELECT * FROM alliance WHERE status=1";
    	$command = YII::app()->db->createCommand($sql);
    	return $command->queryAll();
    }				
}
