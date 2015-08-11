<?php

/**
 * This is the model class for table "ordenes_comentarios".
 *
 * The followings are the available columns in table 'ordenes_comentarios':
 * @property integer $idorden_comentario
 * @property integer $idorden
 * @property string $comentario
 * @property string $fecha
 * @property boolean $activo
 *
 * The followings are the available model relations:
 * @property Ordenes $idorden0
 */
class OrdenesComentarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdenesComentarios the static model class
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
		return 'ordenes_comentarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idorden', 'numerical', 'integerOnly'=>true),
			array('comentario, fecha, activo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idorden_comentario, idorden, comentario, fecha, activo', 'safe', 'on'=>'search'),
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
			'idorden0' => array(self::BELONGS_TO, 'Ordenes', 'idorden'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorden_comentario' => 'Idorden Comentario',
			'idorden' => 'Idorden',
			'comentario' => 'Comentario',
			'fecha' => 'Fecha',
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

		$criteria->compare('idorden_comentario',$this->idorden_comentario);
		$criteria->compare('idorden',$this->idorden);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}