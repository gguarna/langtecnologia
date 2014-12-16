<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $email
 * @property string $cuit
 * @property string $pais
 * @property string $region
 * @property string $direccion
 * @property string $telefono
 * @property string $pagina_web
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('nombre, email, cuit, pais, region, direccion, telefono, pagina_web', 'length', 'max'=>250),
			array('descripcion', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, email, cuit, pais, region, direccion, telefono, pagina_web', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'email' => 'Email',
			'cuit' => 'Cuit',
			'pais' => 'Pais',
			'region' => 'Region',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'pagina_web' => 'Pagina Web',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cuit',$this->cuit,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('pagina_web',$this->pagina_web,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}