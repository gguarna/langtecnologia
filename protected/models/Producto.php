<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id
 * @property string $descripcion
 * @property string $codigo
 * @property string $costo
 * @property string $markup
 * @property string $ppp
 * @property integer $imagenPrincipal
 * @property integer $existenciaMinima
 * @property integer $stockeable
 *
 * The followings are the available model relations:
 * @property ImagenProducto $imagenProducto
 * @property ProveedorProducto[] $proveedorProductos
 * @property RenglonVenta[] $renglonVentas
 */
class Producto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
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
		return 'producto';
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
			array('id, imagenPrincipal, existenciaMinima, stockeable', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>2500),
			array('codigo', 'length', 'max'=>250),
			array('costo, markup, ppp', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, codigo, costo, markup, ppp, imagenPrincipal, existenciaMinima, stockeable', 'safe', 'on'=>'search'),
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
			'imagenProducto' => array(self::HAS_ONE, 'ImagenProducto', 'id_producto'),
			'proveedorProductos' => array(self::HAS_MANY, 'ProveedorProducto', 'id_producto'),
			'renglonVentas' => array(self::HAS_MANY, 'RenglonVenta', 'id_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descripcion' => 'Descripcion',
			'codigo' => 'Codigo',
			'costo' => 'Costo',
			'markup' => 'Markup',
			'ppp' => 'Ppp',
			'imagenPrincipal' => 'Imagen Principal',
			'existenciaMinima' => 'Existencia Minima',
			'stockeable' => 'Stockeable',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('costo',$this->costo,true);
		$criteria->compare('markup',$this->markup,true);
		$criteria->compare('ppp',$this->ppp,true);
		$criteria->compare('imagenPrincipal',$this->imagenPrincipal);
		$criteria->compare('existenciaMinima',$this->existenciaMinima);
		$criteria->compare('stockeable',$this->stockeable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}