<?php

/**
 * This is the model class for table "ordenes_produccion_items".
 *
 * The followings are the available columns in table 'ordenes_produccion_items':
 * @property integer $idorden_produccion_item
 * @property integer $idcotizacion_parcial
 * @property integer $cantidad
 * @property string $importe
 * @property string $fecha_ingreso
 * @property integer $activo
 */
class OrdenesProduccionItems extends CActiveRecord
{
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
			array('idcotizacion_parcial, cantidad, activo', 'numerical', 'integerOnly'=>true),
			array('importe', 'length', 'max'=>10),
			array('fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idorden_produccion_item, idcotizacion_parcial, cantidad, importe, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden_produccion_item' => 'Idorden Produccion Item',
			'idcotizacion_parcial' => 'Idcotizacion Parcial',
			'cantidad' => 'Cantidad',
			'importe' => 'Importe',
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

		$criteria->compare('idorden_produccion_item',$this->idorden_produccion_item);
		$criteria->compare('idcotizacion_parcial',$this->idcotizacion_parcial);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('importe',$this->importe,true);
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
	 * @return OrdenesProduccionItems the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
