<?php

/**
 * This is the model class for table "materiales".
 *
 * The followings are the available columns in table 'materiales':
 * @property integer $idmaterial
 * @property string $nombre
 * @property string $descripcion
 * @property boolean $activo
 *
 * The followings are the available model relations:
 * @property ProductosMateriales[] $productosMateriales
 * @property ProductosTiposMateriales[] $productosTiposMateriales
 */
class Materiales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materiales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activo', 'boolean'),
			array('nombre', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmaterial, nombre, descripcion, activo', 'safe', 'on'=>'search'),
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
			'productosMateriales' => array(self::HAS_MANY, 'ProductosMateriales', 'idmaterial'),
			'productosTiposMateriales' => array(self::HAS_MANY, 'ProductosTiposMateriales', 'idmaterial'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmaterial' => 'Codigo material',
			'nombre' => 'Nombre',
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

		$criteria->compare('idmaterial',$this->idmaterial);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Materiales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
