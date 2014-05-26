<?php

/**
 * This is the model class for table "cotizaciones".
 *
 * The followings are the available columns in table 'cotizaciones':
 * @property integer $idcotizacion
 * @property integer $idarchivo_pdf
 * @property string $idcliente
 * @property integer $idoperador
 * @property integer $idcotizacion_estado
 * @property integer $idmedio_pago
 * @property string $fecha_ingreso
 * @property string $fecha_vencimiento
 * @property string $fecha_recontacto
 * @property string $fecha_recontacto_recordatorio
 * @property integer $recontactar
 * @property string $condiciones_contratacion
 * @property string $observaciones
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Archivos $idarchivoPdf
 * @property Clientes $idcliente0
 * @property CotizacionesEstados $idcotizacionEstado
 * @property MediosPago $idmedioPago
 * @property Operadores $idoperador0
 * @property CotizacionesNotas[] $cotizacionesNotases
 * @property CotizacionesParciales[] $cotizacionesParciales
 * @property OrdenesProduccion[] $ordenesProduccions
 */
class Cotizaciones extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cotizaciones';
    }

    public $razon_social;
    public $idproducto_tipo;
    public $fecha_cotizacion_desde;
    public $fecha_cotizacion_hasta;
    public $importe_total_desde;
    public $importe_total_hasta;

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idarchivo_pdf, idoperador, idcotizacion_estado, idmedio_pago, recontactar, activo', 'numerical', 'integerOnly' => true),
            array('idcliente', 'length', 'max' => 11),
            array('condiciones_contratacion, observaciones', 'length', 'max' => 300),
            array('fecha_ingreso, fecha_vencimiento, fecha_recontacto, fecha_recontacto_recordatorio', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idproducto_tipo,idcotizacion, idarchivo_pdf, idcliente, idoperador, idcotizacion_estado, idmedio_pago, fecha_ingreso, fecha_vencimiento, fecha_recontacto, fecha_recontacto_recordatorio, recontactar, condiciones_contratacion, observaciones, activo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idarchivoPdf' => array(self::BELONGS_TO, 'Archivos', 'idarchivo_pdf'),
            'idcliente0' => array(self::BELONGS_TO, 'Clientes', 'idcliente'),
            'idcotizacionEstado' => array(self::BELONGS_TO, 'CotizacionesEstados', 'idcotizacion_estado'),
            'idmedioPago' => array(self::BELONGS_TO, 'MediosPago', 'idmedio_pago'),
            'idoperador0' => array(self::BELONGS_TO, 'Operadores', 'idoperador'),
            'cotizacionesNotases' => array(self::HAS_MANY, 'CotizacionesNotas', 'idcotizacion'),
            'cotizacionesParciales' => array(self::HAS_MANY, 'CotizacionesParciales', 'idcotizacion'),
            'ordenesProduccions' => array(self::HAS_MANY, 'OrdenesProduccion', 'idcotizacion'),
          
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idcotizacion' => 'Idcotizacion',
            'idarchivo_pdf' => 'Idarchivo Pdf',
            'idproducto_tipo' => 'Tipo de producto',
            'idcliente' => 'Idcliente',
            'idoperador' => 'Idoperador',
            'idcotizacion_estado' => 'Idcotizacion Estado',
            'idmedio_pago' => 'Medio de Pago',
            'fecha_ingreso' => 'Fecha Ingreso',
            'fecha_vencimiento' => 'Fecha Vencimiento',
            'fecha_recontacto' => 'Fecha Recontacto',
            'fecha_recontacto_recordatorio' => 'Fecha Recontacto Recordatorio',
            'recontactar' => 'Recontactar',
            'condiciones_contratacion' => 'Condiciones Contratacion',
            'observaciones' => 'Observaciones',
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

        $criteria->compare('idcotizacion', $this->idcotizacion);
        $criteria->compare('idarchivo_pdf', $this->idarchivo_pdf);
        $criteria->compare('idcliente', $this->idcliente, true);
        $criteria->compare('idoperador', $this->idoperador);
        $criteria->compare('idcotizacion_estado', $this->idcotizacion_estado);
        $criteria->compare('idmedio_pago', $this->idmedio_pago);
        $criteria->compare('fecha_ingreso', $this->fecha_ingreso, true);
        $criteria->compare('fecha_vencimiento', $this->fecha_vencimiento, true);
        $criteria->compare('fecha_recontacto', $this->fecha_recontacto, true);
        $criteria->compare('fecha_recontacto_recordatorio', $this->fecha_recontacto_recordatorio, true);
        $criteria->compare('recontactar', $this->recontactar);
        $criteria->compare('condiciones_contratacion', $this->condiciones_contratacion, true);
        $criteria->compare('observaciones', $this->observaciones, true);
        $criteria->compare('activo', $this->activo);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Cotizaciones the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
