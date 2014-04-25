<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idproducto
 * @property integer $idproducto_tipo
 * @property integer $idmoneda
 * @property string $codigo_producto_interno
 * @property string $nombre
 * @property string $codigo_producto_proveedor
 * @property string $fecha_alta
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property CotizacionesParciales[] $cotizacionesParciales
 * @property Monedas $idmoneda0
 * @property ProductosTipos $idproductoTipo
 * @property ProductosImagenes[] $productosImagenes
 * @property ProductosImpresionesTipos[] $productosImpresionesTiposes
 * @property ProductosMateriales[] $productosMateriales
 * @property ProductosPreciosUnitarios[] $productosPreciosUnitarioses
 */
class Productos extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'productos';
    }
    public $cantidad_imagenes;
    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idproducto_tipo, idmoneda, activo', 'numerical', 'integerOnly' => true),
            array('codigo_producto_interno, codigo_producto_proveedor', 'length', 'max' => 50),
            array('fecha_alta,nombre', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idproducto, idproducto_tipo, idmoneda, codigo_producto_interno, codigo_producto_proveedor, fecha_alta, activo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        'cotizacionesParciales' => array(self::HAS_MANY, 'CotizacionesParciales', 'idproducto'),
        'idmoneda0' => array(self::BELONGS_TO, 'Monedas', 'idmoneda'),
        'idproductoTipo' => array(self::BELONGS_TO, 'ProductosTipos', 'idproducto_tipo'),
        'productosImagenes' => array(self::HAS_MANY, 'ProductosImagenes', 'idproducto'),
        'productosImpresionesTiposes' => array(self::HAS_MANY, 'ProductosImpresionesTipos', 'idproducto'),
        'productosMateriales' => array(self::HAS_MANY, 'ProductosMateriales', 'idproducto'),
        'productosPreciosUnitarioses' => array(self::HAS_MANY, 'ProductosPreciosUnitarios', 'idproducto'),
        'CantidadImagenes' => array(self::STAT, 'productosImagenes', 'idproducto',
        'select' => 'count(idproducto)',
        'condition'=>'activo=1'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idproducto' => 'Idproducto',
            'idproducto_tipo' => 'Tipo de producto',
            'idmoneda' => 'Moneda',
            'codigo_producto_interno' => 'Codigo interno del producto',
            'codigo_producto_proveedor' => 'Codigo proveedor del producto',
            'fecha_alta' => 'Fecha Alta',
            'activo' => 'Activo',
            'cantidad_imagenes' => 'Cantidad de imagenes',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idproducto', $this->idproducto);
        $criteria->compare('idproducto_tipo', $this->idproducto_tipo);
        $criteria->compare('idmoneda', $this->idmoneda);
        $criteria->compare('codigo_producto_interno', $this->codigo_producto_interno, true);
        $criteria->compare('codigo_producto_proveedor', $this->codigo_producto_proveedor, true);
        $criteria->compare('fecha_alta', $this->fecha_alta, true);
        $criteria->compare('activo', $this->activo);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Productos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
