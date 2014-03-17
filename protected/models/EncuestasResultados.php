<?php

/**
 * This is the model class for table "encuestas_resultados".
 *
 * The followings are the available columns in table 'encuestas_resultados':
 * @property integer $idencuesta_respuesta
 * @property integer $idencuesta_pregunta
 * @property string $idcliente
 * @property integer $idasociado
 * @property integer $valor_numerico
 * @property string $valor_texto
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Clientes $idcliente0
 * @property EncuestasPreguntas $idencuestaPregunta
 */
class EncuestasResultados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'encuestas_resultados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_ingreso', 'required'),
			array('idencuesta_pregunta, idasociado, valor_numerico, activo', 'numerical', 'integerOnly'=>true),
			array('idcliente', 'length', 'max'=>11),
			array('valor_texto', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idencuesta_respuesta, idencuesta_pregunta, idcliente, idasociado, valor_numerico, valor_texto, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
			'idencuestaPregunta' => array(self::BELONGS_TO, 'EncuestasPreguntas', 'idencuesta_pregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idencuesta_respuesta' => 'Idencuesta Respuesta',
			'idencuesta_pregunta' => 'Idencuesta Pregunta',
			'idcliente' => 'Idcliente',
			'idasociado' => 'Idasociado',
			'valor_numerico' => 'Valor Numerico',
			'valor_texto' => 'Valor Texto',
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

		$criteria->compare('idencuesta_respuesta',$this->idencuesta_respuesta);
		$criteria->compare('idencuesta_pregunta',$this->idencuesta_pregunta);
		$criteria->compare('idcliente',$this->idcliente,true);
		$criteria->compare('idasociado',$this->idasociado);
		$criteria->compare('valor_numerico',$this->valor_numerico);
		$criteria->compare('valor_texto',$this->valor_texto,true);
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
	 * @return EncuestasResultados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
