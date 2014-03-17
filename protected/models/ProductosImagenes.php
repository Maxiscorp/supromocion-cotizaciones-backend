<?php

/**
 * This is the model class for table "productos_imagenes".
 *
 * The followings are the available columns in table 'productos_imagenes':
 * @property integer $idproducto_imagen
 * @property integer $idproducto
 * @property integer $idarchivo
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Archivos $idarchivo0
 * @property Productos $idproducto0
 */
class ProductosImagenes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos_imagenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idproducto, idarchivo, activo', 'numerical', 'integerOnly'=>true),
			array('fecha_ingreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idproducto_imagen, idproducto, idarchivo, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
			'idarchivo0' => array(self::BELONGS_TO, 'Archivos', 'idarchivo'),
			'idproducto0' => array(self::BELONGS_TO, 'Productos', 'idproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproducto_imagen' => 'Idproducto Imagen',
			'idproducto' => 'Idproducto',
			'idarchivo' => 'Idarchivo',
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

		$criteria->compare('idproducto_imagen',$this->idproducto_imagen);
		$criteria->compare('idproducto',$this->idproducto);
		$criteria->compare('idarchivo',$this->idarchivo);
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
	 * @return ProductosImagenes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
