<?php

/**
 * This is the model class for table "productos_precios_unitarios".
 *
 * The followings are the available columns in table 'productos_precios_unitarios':
 * @property integer $idprecio_producto_unitario
 * @property integer $idproducto
 * @property integer $cantidad
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
            array('idproducto, cantidad, activo', 'numerical', 'integerOnly' => true),
            array('precio_unitario', 'length', 'max' => 10),
            array('precio_unitario,cantidad', 'required', 'on' => 'insert'),
            
            array('fecha_mod', 'safe'),
            array('precio_unitario','compare','compareValue'=>'0','operator'=>'>','message'=>'el precio unitario debe ser mayor a 0'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idprecio_producto_unitario, idproducto, cantidad, precio_unitario, fecha_mod, activo', 'safe', 'on' => 'search'),
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
            'cantidad' => 'Cantidad',
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
        $criteria->compare('cantidad', $this->cantidad);
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
