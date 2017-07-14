<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $id_company
 * @property string $company_code
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property integer $district_id
 * @property integer $klui
 * @property integer $category_id
 * @property string $classification
 * @property integer $type
 * @property integer $status
 */
class Company extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_code, name, address, phone, district_id, klui, category_id, classification, type, status', 'required'),
			array('district_id, klui, category_id, type, status', 'numerical', 'integerOnly'=>true),
			array('company_code, phone, classification', 'length', 'max'=>15),
			array('name', 'length', 'max'=>100),
			array('company_code','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_company, company_code, name, address, phone, district_id, klui, category_id, classification, type, status', 'safe', 'on'=>'search'),
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
			'District'=>array(self::BELONGS_TO,'subdistrict','district_id'),
			'Employee'=>array(self::BELONGS_TO,'companyemployee','id_company'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_company' => 'Id Company',
			'company_code' => 'Kode Perusahaan',
			'name' => 'Nama',
			'address' => 'Alamat',
			'phone' => 'Telepon',
			'district_id' => 'Kecamatan',
			'klui' => 'KLUI',
			'category_id' => 'Sektor Usaha',
			'classification' => 'Klasifikasi',
			'type' => 'Badan Usaha',
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

		$criteria->compare('id_company',$this->id_company);
		$criteria->compare('company_code',$this->company_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('klui',$this->klui);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('classification',$this->classification,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Company the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateCompanyCode(){
		$_i = "P";
		$_left = $_i;
		$_first = "00001";
		$_len = strlen($_left);
		$no = $_left . $_first; 
		
		$last_po = $this->find( 
				array(
					"select"=>"company_code",
					"condition" => "left(company_code, " . $_len . ") = :_left",
					"params" => array(":_left" => $_left),
					"order" => "id_company DESC"
				));
		
		if($last_po != null){
			$_no = substr($last_po->company_code, $_len);
			$_no++;
			$_no = substr("000000", strlen($_no)) . $_no;
			$no = $_left . $_no;
		}
		
		return $no;
		}	


		public function classification($data){
			if($data==1){
				return "Besar";
			}elseif($data==2){
				return "Kecil";
			}elseif($data==3){
				return "Sedang";
			}elseif($data==4){
				return "Menengah";
			}else{
				return "< Kecil";
			}
		}

		public function category($data){
			if($data==1){
				return "PMDN";
			}elseif($data==2){
				return "Swasta Nasional";
			}elseif($data==3){
				return "Perseorangan";
			}elseif($data==4){
				return "PMA";
			}elseif($data==5){
				return "BUMN";
			}elseif($data==6){
				return "Koperasi";	
			}elseif($data==7){
				return "Joint Vuture";
			}elseif($data==8){
				return "Joint Venture";																			
			}else{
				return "Perorangan";
			}
		}		

		public function countEmployee($male,$female,$wnamale,$wnafemale,$year){
			$now = date('Y');
			if($year==$now){
				$data = $male + $female + $wnafemale + $wnafemale;
				return $data;
			}else{
				return "Data Pegawai Belum di Perbaharui, Update Terakhir Tahun ".$year;
			}
		}
			
}
