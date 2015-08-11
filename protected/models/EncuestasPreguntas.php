<?php

/**
 * This is the model class for table "encuestas_preguntas".
 *
 * The followings are the available columns in table 'encuestas_preguntas':
 * @property integer $idencuesta_pregunta
 * @property integer $idencuesta
 * @property integer $idencuesta_pregunta_tipo
 * @property string $descripcion
 * @property string $fecha_ingreso
 * @property integer $orden
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property EncuestasPreguntasTipos $idencuestaPreguntaTipo
 * @property Encuestas $idencuesta0
 * @property EncuestasResultados[] $encuestasResultadoses
 */
class EncuestasPreguntas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'encuestas_preguntas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idencuesta, fecha_ingreso, orden', 'required'),
			array('idencuesta, idencuesta_pregunta_tipo, orden, activo', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idencuesta_pregunta, idencuesta, idencuesta_pregunta_tipo, descripcion, fecha_ingreso, orden, activo', 'safe', 'on'=>'search'),
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
			'idencuestaPreguntaTipo' => array(self::BELONGS_TO, 'EncuestasPreguntasTipos', 'idencuesta_pregunta_tipo'),
			'idencuesta0' => array(self::BELONGS_TO, 'Encuestas', 'idencuesta'),
			'encuestasResultadoses' => array(self::HAS_MANY, 'EncuestasResultados', 'idencuesta_pregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idencuesta_pregunta' => 'Idencuesta Pregunta',
			'idencuesta' => 'Idencuesta',
			'idencuesta_pregunta_tipo' => 'Idencuesta Pregunta Tipo',
			'descripcion' => 'Descripcion',
			'fecha_ingreso' => 'Fecha Ingreso',
			'orden' => 'Orden',
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

		$criteria->compare('idencuesta_pregunta',$this->idencuesta_pregunta);
		$criteria->compare('idencuesta',$this->idencuesta);
		$criteria->compare('idencuesta_pregunta_tipo',$this->idencuesta_pregunta_tipo);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EncuestasPreguntas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
