<?php

/**
 * This is the model class for table "productos_precios_unitarios".
 *
 * The followings are the available columns in table 'productos_precios_unitarios':
 * @property integer $idprecio_producto_unitario
 * @property integer $idproducto
 * @property integer $cantidad_desde
 * @property integer $cantidad_hasta
 * @property string $precio_unitario
 * @property string $fecha_mod
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Productos $idproducto0
 */
class ProductosPreciosUnitarios extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'productos_precios_unitarios';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idproducto, cantidad_desde, cantidad_hasta, activo', 'numerical', 'integerOnly' => true),
            array('precio_unitario', 'length', 'max' => 10),
            array('fecha_mod', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idprecio_producto_unitario, idproducto, cantidad_desde, cantidad_hasta, precio_unitario, fecha_mod, activo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */


    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idproducto0' => array(self::BELONGS_TO, 'Productos', 'idproducto'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idprecio_producto_unitario' => 'Idprecio Producto Unitario',
            'idproducto' => 'Idproducto',
            'cantidad_desde' => 'Cantidad Desde',
            'cantidad_hasta' => 'Cantidad Hasta',
            'precio_unitario' => 'Precio Unitario',
            'fecha_mod' => 'Fecha Mod',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idprecio_producto_unitario', $this->idprecio_producto_unitario);
        $criteria->compare('idproducto', $this->idproducto);
        $criteria->compare('cantidad_desde', $this->cantidad_desde);
        $criteria->compare('cantidad_hasta', $this->cantidad_hasta);
        $criteria->compare('precio_unitario', $this->precio_unitario, true);
        $criteria->compare('fecha_mod', $this->fecha_mod, true);
        $criteria->compare('activo', $this->activo);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ProductosPreciosUnitarios the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
