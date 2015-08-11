<?php

/**
 * This is the model class for table "ordenes_items".
 *
 * The followings are the available columns in table 'ordenes_items':
 * @property integer $idorden_item
 * @property integer $idcotizacion_item
 * @property string $fecha
 * @property boolean $activo
 * @property integer $idorden
 * @property string $proveedor
 * @property integer $cantidad
 * @property string $importe
 *
 * The followings are the available model relations:
 * @property CotizacionesParcialesDetalle $idcotizacionItem
 * @property Ordenes $idorden0
 */
class OrdenesItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdenesItems the static model class
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
		return 'ordenes_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcotizacion_item, idorden, cantidad', 'numerical', 'integerOnly'=>true),
			array('importe', 'length', 'max'=>11),
			array('fecha, activo, proveedor', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idorden_item, idcotizacion_item, fecha, activo, idorden, proveedor, cantidad, importe', 'safe', 'on'=>'search'),
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
			'idcotizacionItem' => array(self::BELONGS_TO, 'CotizacionesParcialesDetalle', 'idcotizacion_item'),
			'idorden0' => array(self::BELONGS_TO, 'Ordenes', 'idorden'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden_item' => 'Idorden Item',
			'idcotizacion_item' => 'Idcotizacion Item',
			'fecha' => 'Fecha',
			'activo' => 'Activo',
			'idorden' => 'Idorden',
			'proveedor' => 'Proveedor',
			'cantidad' => 'Cantidad',
			'importe' => 'Importe',
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

		$criteria->compare('idorden_item',$this->idorden_item);
		$criteria->compare('idcotizacion_item',$this->idcotizacion_item);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('idorden',$this->idorden);
		$criteria->compare('proveedor',$this->proveedor,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('importe',$this->importe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}