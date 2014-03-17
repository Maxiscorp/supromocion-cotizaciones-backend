<?php

/**
 * This is the model class for table "productos_impresiones_tipos".
 *
 * The followings are the available columns in table 'productos_impresiones_tipos':
 * @property integer $idproducto_impresion_tipo
 * @property integer $idproducto
 * @property integer $idimpresion_tipo
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property ImpresionesTipos $idimpresionTipo
 * @property Productos $idproducto0
 */
class ProductosImpresionesTipos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos_impresiones_tipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idproducto, idimpresion_tipo, activo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idproducto_impresion_tipo, idproducto, idimpresion_tipo, activo', 'safe', 'on'=>'search'),
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
			'idimpresionTipo' => array(self::BELONGS_TO, 'ImpresionesTipos', 'idimpresion_tipo'),
			'idproducto0' => array(self::BELONGS_TO, 'Productos', 'idproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproducto_impresion_tipo' => 'Idproducto Impresion Tipo',
			'idproducto' => 'Idproducto',
			'idimpresion_tipo' => 'Idimpresion Tipo',
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

		$criteria->compare('idproducto_impresion_tipo',$this->idproducto_impresion_tipo);
		$criteria->compare('idproducto',$this->idproducto);
		$criteria->compare('idimpresion_tipo',$this->idimpresion_tipo);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductosImpresionesTipos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
