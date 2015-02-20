<?php

/**
 * This is the model class for table "ordenes_produccion".
 *
 * The followings are the available columns in table 'ordenes_produccion':
 * @property integer $idorden_produccion
 * @property string $idcliente
 * @property string $comision_operador
 * @property integer $idorden_estado
 * @property string $porcentaje_facturado
 * @property string $entrega_idprovincia
 * @property string $entrega_localidad
 * @property string $entrega_codigo_postal
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Clientes $idcliente0
 * @property OrdenesEstados $idordenEstado
 * @property Provincias $entregaIdprovincia
 * @property OrdenesProduccionCotizaciones[] $ordenesProduccionCotizaciones
 */
class OrdenesProduccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdenesProduccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
    public $razon_social;
	public function tableName()
	{
		return 'ordenes_produccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idorden_estado, activo', 'numerical', 'integerOnly'=>true),
			array('idcliente', 'length', 'max'=>11),
			array('comision_operador, porcentaje_facturado', 'length', 'max'=>3),
			array('entrega_idprovincia', 'length', 'max'=>10),
			array('entrega_localidad', 'length', 'max'=>150),
			array('entrega_codigo_postal', 'length', 'max'=>50),
			array('fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idorden_produccion, idcliente, comision_operador, idorden_estado, porcentaje_facturado, entrega_idprovincia, entrega_localidad, entrega_codigo_postal, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
			'idcliente0' => array(self::BELONGS_TO, 'Clientes', 'idcliente'),
			'idordenEstado' => array(self::BELONGS_TO, 'OrdenesEstados', 'idorden_estado'),
			'entregaIdprovincia' => array(self::BELONGS_TO, 'Provincias', 'entrega_idprovincia'),
			'ordenesProduccionCotizaciones' => array(self::HAS_MANY, 'OrdenesProduccionCotizaciones', 'idorden_produccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden_produccion' => 'Idorden Produccion',
			'idcliente' => 'Cliente',
			'comision_operador' => 'Comision Operador',
			'idorden_estado' => 'Idorden Estado',
			'porcentaje_facturado' => 'Porcentaje Facturado',
			'entrega_idprovincia' => 'Provincia',
			'entrega_localidad' => 'Localidad',
			'entrega_codigo_postal' => 'Codigo Postal',
			'fecha_ingreso' => 'Fecha Ingreso',
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

		$criteria->compare('idorden_produccion',$this->idorden_produccion);
		$criteria->compare('idcliente',$this->idcliente,true);
		$criteria->compare('comision_operador',$this->comision_operador,true);
		$criteria->compare('idorden_estado',$this->idorden_estado);
		$criteria->compare('porcentaje_facturado',$this->porcentaje_facturado,true);
		$criteria->compare('entrega_idprovincia',$this->entrega_idprovincia,true);
		$criteria->compare('entrega_localidad',$this->entrega_localidad,true);
		$criteria->compare('entrega_codigo_postal',$this->entrega_codigo_postal,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}