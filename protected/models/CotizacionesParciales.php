<?php

/**
 * This is the model class for table "cotizaciones_parciales".
 *
 * The followings are the available columns in table 'cotizaciones_parciales':
 * @property integer $idcotizacion_parcial
 * @property integer $idcotizacion
 * @property integer $idproducto
 * @property integer $idimpresion_colores
 * @property integer $idimpresion_tipo
 * @property integer $idimpresion_fases
 * @property integer $idarchivo_logo
 * @property integer $cantidad
 * @property string $importe
 * @property string $tiempo_produccion
 * @property string $nota
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Archivos $idarchivoLogo
 * @property Cotizaciones $idcotizacion0
 * @property ImpresionesColores $idimpresionColores
 * @property ImpresionesFases $idimpresionFases
 * @property ImpresionesTipos $idimpresionTipo
 * @property Productos $idproducto0
 */
class CotizacionesParciales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cotizaciones_parciales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcotizacion_parcial, idcotizacion, idproducto, idimpresion_colores, idimpresion_tipo, idimpresion_fases, idarchivo_logo, cantidad, activo', 'numerical', 'integerOnly'=>true),
			array('importe', 'length', 'max'=>10),
			array('nota', 'length', 'max'=>300),
			array('tiempo_produccion, fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcotizacion_parcial, idcotizacion, idproducto, idimpresion_colores, idimpresion_tipo, idimpresion_fases, idarchivo_logo, cantidad, importe, tiempo_produccion, nota, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
			'idarchivoLogo' => array(self::BELONGS_TO, 'Archivos', 'idarchivo_logo'),
			'idcotizacion0' => array(self::BELONGS_TO, 'Cotizaciones', 'idcotizacion'),
			'idimpresionColores' => array(self::BELONGS_TO, 'ImpresionesColores', 'idimpresion_colores'),
			'idimpresionFases' => array(self::BELONGS_TO, 'ImpresionesFases', 'idimpresion_fases'),
			'idimpresionTipo' => array(self::BELONGS_TO, 'ImpresionesTipos', 'idimpresion_tipo'),
			'idproducto0' => array(self::BELONGS_TO, 'Productos', 'idproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcotizacion_parcial' => 'Idcotizacion Parcial',
			'idcotizacion' => 'Idcotizacion',
			'idproducto' => 'Idproducto',
			'idimpresion_colores' => 'Idimpresion Colores',
			'idimpresion_tipo' => 'Idimpresion Tipo',
			'idimpresion_fases' => 'Idimpresion Fases',
			'idarchivo_logo' => 'Idarchivo Logo',
			'cantidad' => 'Cantidad',
			'importe' => 'Importe',
			'tiempo_produccion' => 'Tiempo Produccion',
			'nota' => 'Nota',
			'fecha_ingreso' => 'Fecha Ingreso',
			'activo' => 'Activo',
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

		$criteria->compare('idcotizacion_parcial',$this->idcotizacion_parcial);
		$criteria->compare('idcotizacion',$this->idcotizacion);
		$criteria->compare('idproducto',$this->idproducto);
		$criteria->compare('idimpresion_colores',$this->idimpresion_colores);
		$criteria->compare('idimpresion_tipo',$this->idimpresion_tipo);
		$criteria->compare('idimpresion_fases',$this->idimpresion_fases);
		$criteria->compare('idarchivo_logo',$this->idarchivo_logo);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('importe',$this->importe,true);
		$criteria->compare('tiempo_produccion',$this->tiempo_produccion,true);
		$criteria->compare('nota',$this->nota,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CotizacionesParciales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
