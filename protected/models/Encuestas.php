<?php

/**
 * This is the model class for table "encuestas".
 *
 * The followings are the available columns in table 'encuestas':
 * @property integer $idencuesta
 * @property integer $idencuesta_tipo
 * @property string $nombre
 * @property string $fecha_inicio
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property EncuestasTipos $idencuestaTipo
 * @property EncuestasPreguntas[] $encuestasPreguntases
 */
class Encuestas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'encuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_inicio', 'required'),
			array('idencuesta_tipo, activo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idencuesta, idencuesta_tipo, nombre, fecha_inicio, activo', 'safe', 'on'=>'search'),
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
			'idencuestaTipo' => array(self::BELONGS_TO, 'EncuestasTipos', 'idencuesta_tipo'),
			'encuestasPreguntases' => array(self::HAS_MANY, 'EncuestasPreguntas', 'idencuesta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idencuesta' => 'Idencuesta',
			'idencuesta_tipo' => 'Idencuesta Tipo',
			'nombre' => 'Nombre',
			'fecha_inicio' => 'Fecha Inicio',
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

		$criteria->compare('idencuesta',$this->idencuesta);
		$criteria->compare('idencuesta_tipo',$this->idencuesta_tipo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Encuestas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
