<?php

/**
 * This is the model class for table "proveedor_producto".
 *
 * The followings are the available columns in table 'proveedor_producto':
 * @property integer $id_proveedor
 * @property integer $id_producto
 *
 * The followings are the available model relations:
 * @property Producto $idProducto
 */
class ProveedorProducto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProveedorProducto the static model class
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
		return 'proveedor_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proveedor, id_producto', 'required'),
			array('id_proveedor, id_producto', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proveedor, id_producto', 'safe', 'on'=>'search'),
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
			'idProducto' => array(self::BELONGS_TO, 'Producto', 'id_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedor' => 'Id Proveedor',
			'id_producto' => 'Id Producto',
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

		$criteria->compare('id_proveedor',$this->id_proveedor);
		$criteria->compare('id_producto',$this->id_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}