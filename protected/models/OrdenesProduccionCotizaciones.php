<?php

/**
 * This is the model class for table "ordenes_produccion_cotizaciones".
 *
 * The followings are the available columns in table 'ordenes_produccion_cotizaciones':
 * @property integer $idorden_produccion_cotizacion
 * @property integer $idorden_produccion
 * @property integer $idcotizacion
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Cotizaciones $idcotizacion0
 * @property OrdenesProduccion $idordenProduccion
 */
class OrdenesProduccionCotizaciones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdenesProduccionCotizaciones the static model class
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
		return 'ordenes_produccion_cotizaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idorden_produccion_cotizacion, idorden_produccion, idcotizacion, activo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idorden_produccion_cotizacion, idorden_produccion, idcotizacion, activo', 'safe', 'on'=>'search'),
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
			'idcotizacion0' => array(self::BELONGS_TO, 'Cotizaciones', 'idcotizacion'),
			'idordenProduccion' => array(self::BELONGS_TO, 'OrdenesProduccion', 'idorden_produccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden_produccion_cotizacion' => 'Idorden Produccion Cotizacion',
			'idorden_produccion' => 'Idorden Produccion',
			'idcotizacion' => 'Idcotizacion',
			'activo' => 'Activo',
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

		$criteria->compare('idorden_produccion_cotizacion',$this->idorden_produccion_cotizacion);
		$criteria->compare('idorden_produccion',$this->idorden_produccion);
		$criteria->compare('idcotizacion',$this->idcotizacion);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}