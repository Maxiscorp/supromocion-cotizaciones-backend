<?php

/**
 * This is the model class for table "productos_materiales".
 *
 * The followings are the available columns in table 'productos_materiales':
 * @property integer $idproducto_material
 * @property integer $idproducto
 * @property integer $idmaterial
 * @property string $fecha_alta
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Materiales $idmaterial0
 * @property Productos $idproducto0
 */
class ProductosMateriales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos_materiales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idproducto, idmaterial, activo', 'numerical', 'integerOnly'=>true),
			array('fecha_alta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idproducto_material, idproducto, idmaterial, fecha_alta, activo', 'safe', 'on'=>'search'),
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
			'idmaterial0' => array(self::BELONGS_TO, 'Materiales', 'idmaterial'),
			'idproducto0' => array(self::BELONGS_TO, 'Productos', 'idproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproducto_material' => 'Idproducto Material',
			'idproducto' => 'Idproducto',
			'idmaterial' => 'Idmaterial',
			'fecha_alta' => 'Fecha Alta',
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

		$criteria->compare('idproducto_material',$this->idproducto_material);
		$criteria->compare('idproducto',$this->idproducto);
		$criteria->compare('idmaterial',$this->idmaterial);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductosMateriales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
