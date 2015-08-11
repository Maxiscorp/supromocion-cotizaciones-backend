<?php

/**
 * This is the model class for table "ordenes".
 *
 * The followings are the available columns in table 'ordenes':
 * @property integer $idorden
 * @property integer $idcotizacion
 * @property integer $idcliente
 * @property string $nro_presupuesto
 * @property string $fecha
 * @property string $lugar_entrega
 * @property boolean $activo
 * @property integer $entrega_idprovincia
 * @property string $entrega_localidad
 * @property string $entrega_codigo_postal
 * @property string $porcentaje_facturado
 * @property string $comision_operador
 * @property string $proveedor
 *
 * The followings are the available model relations:
 * @property Clientes $idcliente0
 * @property Cotizaciones $idcotizacion0
 * @property OrdenesItems[] $ordenesItems
 * @property OrdenesComentarios[] $ordenesComentarioses
 */
class Ordenes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ordenes the static model class
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
		return 'ordenes';
	}

    public $razon_social;
    public $fecha_desde;
    public $fecha_hasta;
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('idcotizacion, entrega_idprovincia,idcliente', 'numerical', 'integerOnly'=>true),
            array('porcentaje_facturado', 'numerical', 'allowEmpty' => false,
                'integerOnly' => false, 'min' => 0, 'max' => 100),
            array('comision_operador', 'numerical', 'allowEmpty' => false,
                'integerOnly' => false, 'min' => 0, 'max' => 100),
			array('porcentaje_facturado, comision_operador', 'length', 'max'=>9),
			array('idcliente,nro_presupuesto, fecha, lugar_entrega, activo, entrega_localidad, entrega_codigo_postal, proveedor', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fecha_hasta,fecha_desde,razon_social,idorden, idcotizacion, idcliente, nro_presupuesto, fecha, lugar_entrega, activo, entrega_idprovincia, entrega_localidad, entrega_codigo_postal, porcentaje_facturado, comision_operador, proveedor', 'safe', 'on'=>'search'),
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
			'idcotizacion0' => array(self::BELONGS_TO, 'Cotizaciones', 'idcotizacion'),
			'ordenesItems' => array(self::HAS_MANY, 'OrdenesItems', 'idorden'),
			'ordenesComentarioses' => array(self::HAS_MANY, 'OrdenesComentarios', 'idorden'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden' => 'Idorden',
			'idcotizacion' => 'Idcotizacion',
			'idcliente' => 'Cliente',
			'nro_presupuesto' => 'Nro Presupuesto',
			'fecha' => 'Fecha',
			'lugar_entrega' => 'Lugar de entrega',
			'activo' => 'Activo',
			'entrega_idprovincia' => 'Provincia',
			'entrega_localidad' => 'Localidad',
			'entrega_codigo_postal' => 'Codigo postal',
			'porcentaje_facturado' => 'Porcentaje Facturado',
			'comision_operador' => 'Comision Operador',
			'proveedor' => 'Proveedor',
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

		$criteria->compare('idorden',$this->idorden);
		$criteria->compare('idcotizacion',$this->idcotizacion);
		$criteria->compare('idcliente',$this->idcliente);
		$criteria->compare('nro_presupuesto',$this->nro_presupuesto,true);
        if($this->fecha_desde!="" && $this->fecha_hasta!=""){

            $criteria->addBetweenCondition('fecha', $this->fecha_desde, $this->fecha_hasta);
        }
        $criteria->compare('lugar_entrega',$this->lugar_entrega,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('entrega_idprovincia',$this->entrega_idprovincia);
		$criteria->compare('entrega_localidad',$this->entrega_localidad,true);
		$criteria->compare('entrega_codigo_postal',$this->entrega_codigo_postal,true);
		$criteria->compare('porcentaje_facturado',$this->porcentaje_facturado,true);
		$criteria->compare('comision_operador',$this->comision_operador,true);
		$criteria->compare('proveedor',$this->proveedor,true);
       /* $criteria->addSearchCondition('idcliente0.razon_social', $this->razon_social);*/
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}