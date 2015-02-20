<?php

/**
 * This is the model class for table "operadores_porcentajes".
 *
 * The followings are the available columns in table 'operadores_porcentajes':
 * @property integer $idoperador_porcentaje
 * @property string $importe_desde
 * @property string $importe_hasta
 * @property string $porcentaje
 * @property integer $idoperador
 * @property string $fecha_mod
 * @property boolean $activo
 *
 * The followings are the available model relations:
 * @property Operadores $idoperador0
 */
class OperadoresPorcentajes extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'operadores_porcentajes';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idoperador, activo', 'numerical', 'integerOnly' => true),
            array('importe_desde, importe_hasta', 'length', 'max' => 11),
            
            array('porcentaje,importe_desde,importe_hasta', 'required', 'on' => 'insert'),
            array('porcentaje', 'length', 'max' => 3,'on'=>'insert'),
            array('fecha_mod', 'safe'),
            array('porcentaje', 'compare', 'compareValue' => '0', 'operator' => '>', 'message' => 'el porcentaje de comision debe ser mayor a 0','on'=>'insert'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idoperador_porcentaje, importe_desde, importe_hasta, porcentaje, idoperador, fecha_mod, activo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idoperador0' => array(self::BELONGS_TO, 'Operadores', 'idoperador'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idoperador_porcentaje' => 'Idoperador Porcentaje',
            'importe_desde' => 'Importe Desde',
            'importe_hasta' => 'Importe Hasta',
            'porcentaje' => 'Porcentaje',
            'idoperador' => 'Idoperador',
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

        $criteria->compare('idoperador_porcentaje', $this->idoperador_porcentaje);
        $criteria->compare('importe_desde', $this->importe_desde, true);
        $criteria->compare('importe_hasta', $this->importe_hasta, true);
        $criteria->compare('porcentaje', $this->porcentaje, true);
        $criteria->compare('idoperador', $this->idoperador);
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
     * @return OperadoresPorcentajes the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
