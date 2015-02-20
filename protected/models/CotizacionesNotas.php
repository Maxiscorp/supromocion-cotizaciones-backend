<?php

/**
 * This is the model class for table "cotizaciones_notas".
 *
 * The followings are the available columns in table 'cotizaciones_notas':
 * @property integer $idcotizacion_nota
 * @property integer $idcotizacion
 * @property string $descripcion
 * @property string $fecha_recontacto
 * @property string $fecha_ingreso
 * @property integer $ultima
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Cotizaciones $idcotizacion0
 */
class CotizacionesNotas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cotizaciones_notas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcotizacion, fecha_recontacto, fecha_ingreso', 'required'),
			array('idcotizacion, ultima, activo', 'numerical', 'integerOnly'=>true),
			array('descripcion, fecha_recontacto', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcotizacion_nota, idcotizacion, descripcion, fecha_recontacto, fecha_ingreso, ultima, activo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcotizacion_nota' => 'Idcotizacion Nota',
			'idcotizacion' => 'Idcotizacion',
			'descripcion' => 'Descripcion',
			'fecha_recontacto' => 'Fecha Recontacto',
			'fecha_ingreso' => 'Fecha Ingreso',
			'ultima' => 'Ultima',
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

		$criteria->compare('idcotizacion_nota',$this->idcotizacion_nota);
		$criteria->compare('idcotizacion',$this->idcotizacion);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_recontacto',$this->fecha_recontacto,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('ultima',$this->ultima);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CotizacionesNotas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
