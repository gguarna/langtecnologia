<?php

/**
 * This is the model class for table "renglon_venta".
 *
 * The followings are the available columns in table 'renglon_venta':
 * @property integer $id
 * @property integer $id_producto
 * @property integer $cantidad
 * @property string $precio
 * @property integer $id_venta
 *
 * The followings are the available model relations:
 * @property Producto $idProducto
 */
class RenglonVenta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RenglonVenta the static model class
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
		return 'renglon_venta';
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
			array('id, id_producto, cantidad, id_venta', 'numerical', 'integerOnly'=>true),
			array('precio', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_producto, cantidad, precio, id_venta', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'id_producto' => 'Id Producto',
			'cantidad' => 'Cantidad',
			'precio' => 'Precio',
			'id_venta' => 'Id Venta',
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
		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('id_venta',$this->id_venta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}