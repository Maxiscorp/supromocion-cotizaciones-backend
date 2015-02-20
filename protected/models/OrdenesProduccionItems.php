<?php

/**
 * This is the model class for table "ordenes_produccion_items".
 *
 * The followings are the available columns in table 'ordenes_produccion_items':
 * @property integer $idorden_produccion_item
 * @property integer $cantidad
 * @property string $importe
 * @property string $fecha_ingreso
 * @property integer $activo
 * @property integer $idorden_produccion
 * @property string $nota
 *
 * The followings are the available model relations:
 * @property OrdenesProduccion $idordenProduccion
 * @property OrdenesProduccionItemsCotizaciones[] $ordenesProduccionItemsCotizaciones
 */
class OrdenesProduccionItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdenesProduccionItems the static model class
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
		return 'ordenes_produccion_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idorden_produccion', 'required'),
			array('cantidad, activo, idorden_produccion', 'numerical', 'integerOnly'=>true),
			array('importe', 'length', 'max'=>10),
			array('nota', 'length', 'max'=>50),
			array('fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idorden_produccion_item, cantidad, importe, fecha_ingreso, activo, idorden_produccion, nota', 'safe', 'on'=>'search'),
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
			'idordenProduccion' => array(self::BELONGS_TO, 'OrdenesProduccion', 'idorden_produccion'),
			'ordenesProduccionItemsCotizaciones' => array(self::HAS_MANY, 'OrdenesProduccionItemsCotizaciones', 'idorden_produccion_item'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden_produccion_item' => 'Idorden Produccion Item',
			'cantidad' => 'Cantidad',
			'importe' => 'Importe',
			'fecha_ingreso' => 'Fecha Ingreso',
			'activo' => 'Activo',
			'idorden_produccion' => 'Idorden Produccion',
			'nota' => 'Nota',
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

		$criteria->compare('idorden_produccion_item',$this->idorden_produccion_item);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('importe',$this->importe,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('idorden_produccion',$this->idorden_produccion);
		$criteria->compare('nota',$this->nota,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}