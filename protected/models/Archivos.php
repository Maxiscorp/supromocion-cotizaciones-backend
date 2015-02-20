<?php

/**
 * This is the model class for table "archivos".
 *
 * The followings are the available columns in table 'archivos':
 * @property integer $idarchivo
 * @property string $nombre_archivo
 * @property string $ruta_archivo
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Clientes[] $clientes
 * @property Cotizaciones[] $cotizaciones
 * @property CotizacionesParciales[] $cotizacionesParciales
 * @property ProductosImagenes[] $productosImagenes
 */

class Archivos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         public $archivo;
	public function tableName()
	{
		return 'archivos';
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
                        array('archivo', 'file', 'types' => 'jpg, gif, png,pdf,tiff,jpeg,bmp', 'allowEmpty' => true, 'maxSize' => 2048000, 'on' => 'producto_imagenes_upload'),
                        array('nombre_archivo', 'length', 'max'=>100),
			array('ruta_archivo', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idarchivo, nombre_archivo, ruta_archivo, fecha_ingreso, activo', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Clientes', 'idarchivo_logo'),
			'cotizaciones' => array(self::HAS_MANY, 'Cotizaciones', 'idarchivo_pdf'),
			'cotizacionesParciales' => array(self::HAS_MANY, 'CotizacionesParciales', 'idarchivo_logo'),
			'productosImagenes' => array(self::HAS_MANY, 'ProductosImagenes', 'idarchivo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idarchivo' => 'Idarchivo',
			'nombre_archivo' => 'Nombre Archivo',
			'ruta_archivo' => 'Ruta Archivo',
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

		$criteria->compare('idarchivo',$this->idarchivo);
		$criteria->compare('nombre_archivo',$this->nombre_archivo,true);
		$criteria->compare('ruta_archivo',$this->ruta_archivo,true);
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
	 * @return Archivos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
