<?php

/**
 * This is the model class for table "impresiones_tipos_colores_precios_unitarios".
 *
 * The followings are the available columns in table 'impresiones_tipos_colores_precios_unitarios':
 * @property integer $idimpresion_tipo_color_precio_unitario
 * @property integer $idimpresion_tipo
 * @property integer $idimpresion_color
 * @property integer $cantidad
 * @property string $precio_unitario
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property ImpresionesColores $idimpresionColor
 * @property ImpresionesTipos $idimpresionTipo
 */
class ImpresionesTiposColoresPreciosUnitarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ImpresionesTiposColoresPreciosUnitarios the static model class
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
		return 'impresiones_tipos_colores_precios_unitarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idimpresion_tipo_color_precio_unitario, idimpresion_tipo, idimpresion_color, cantidad, precio_unitario, fecha_ingreso', 'required'),
			array('idimpresion_tipo_color_precio_unitario, idimpresion_tipo, idimpresion_color, cantidad, activo', 'numerical', 'integerOnly'=>true),
			array('precio_unitario', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idimpresion_tipo_color_precio_unitario, idimpresion_tipo, idimpresion_color, cantidad, precio_unitario, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
			'idimpresionColor' => array(self::BELONGS_TO, 'ImpresionesColores', 'idimpresion_color'),
			'idimpresionTipo' => array(self::BELONGS_TO, 'ImpresionesTipos', 'idimpresion_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idimpresion_tipo_color_precio_unitario' => 'Idimpresion Tipo Color Precio Unitario',
			'idimpresion_tipo' => 'Idimpresion Tipo',
			'idimpresion_color' => 'Idimpresion Color',
			'cantidad' => 'Cantidad',
			'precio_unitario' => 'Precio Unitario',
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

		$criteria->compare('idimpresion_tipo_color_precio_unitario',$this->idimpresion_tipo_color_precio_unitario);
		$criteria->compare('idimpresion_tipo',$this->idimpresion_tipo);
		$criteria->compare('idimpresion_color',$this->idimpresion_color);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('precio_unitario',$this->precio_unitario,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}