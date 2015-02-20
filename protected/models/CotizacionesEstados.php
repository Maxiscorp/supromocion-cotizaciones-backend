<?php

/**
 * This is the model class for table "cotizaciones_estados".
 *
 * The followings are the available columns in table 'cotizaciones_estados':
 * @property integer $idcotizacion_estado
 * @property string $descripcion
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Cotizaciones[] $cotizaciones
 */
class CotizacionesEstados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cotizaciones_estados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activo', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcotizacion_estado, descripcion, activo', 'safe', 'on'=>'search'),
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
			'cotizaciones' => array(self::HAS_MANY, 'Cotizaciones', 'idcotizacion_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcotizacion_estado' => 'Idcotizacion Estado',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idcotizacion_estado',$this->idcotizacion_estado);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CotizacionesEstados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
