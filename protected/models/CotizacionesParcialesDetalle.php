<?php

/**
 * This is the model class for table "cotizaciones_parciales_detalle".
 *
 * The followings are the available columns in table 'cotizaciones_parciales_detalle':
 * @property integer $idcotizacion_parcial_detalle
 * @property integer $idcotizacion_parcial
 * @property integer $cantidad
 * @property string $importe_impresion
 * @property string $importe_producto
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property CotizacionesParciales $idcotizacionParcial
 */
class CotizacionesParcialesDetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CotizacionesParcialesDetalle the static model class
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
		return 'cotizaciones_parciales_detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcotizacion_parcial', 'required'),
			array('idcotizacion_parcial, cantidad, activo', 'numerical', 'integerOnly'=>true),
			array('importe_impresion, importe_producto', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcotizacion_parcial_detalle, idcotizacion_parcial, cantidad, importe_impresion, importe_producto, activo', 'safe', 'on'=>'search'),
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
			'idcotizacionParcial' => array(self::BELONGS_TO, 'CotizacionesParciales', 'idcotizacion_parcial'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcotizacion_parcial_detalle' => 'Idcotizacion Parcial Detalle',
			'idcotizacion_parcial' => 'Idcotizacion Parcial',
			'cantidad' => 'Cantidad',
                    
			'idproducto' => 'Producto',
			'idimpresion_colores' => 'Cantidad colores',
			'idimpresion_tipo' => 'Tipo de impresion',
			'idimpresion_fases' => 'Fases',
			'importe_impresion' => 'Precio unitario Impresion',
			'importe_producto' => 'Precio unitario Producto',
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

		$criteria->compare('idcotizacion_parcial_detalle',$this->idcotizacion_parcial_detalle);
		$criteria->compare('idcotizacion_parcial',$this->idcotizacion_parcial);
		$criteria->compare('cantidad',$this->cantidad);
                
		$criteria->compare('importe_impresion',$this->importe_impresion,true);
		$criteria->compare('importe_producto',$this->importe_producto,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}