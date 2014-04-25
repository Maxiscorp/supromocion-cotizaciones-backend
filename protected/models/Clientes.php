<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property string $idcliente
 * @property string $cuit
 * @property string $razon_social
 * @property string $nombre_comercial
 * @property string $contacto
 * @property string $email
 * @property string $telefono
 * @property integer $envia_mails_seguimiento
 * @property string $localidad
 * @property string $codigo_postal
 * @property string $idcondicion_iva
 * @property integer $idarchivo_logo
 * @property string $idprovincia
 * @property string $fecha_alta
 * @property string $fecha_ultima_cotizacion_aprobada
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Archivos $idarchivoLogo
 * @property CondicionesIva $idcondicionIva
 * @property Provincias $idprovincia0
 * @property ClientesAgentesRetencion[] $clientesAgentesRetencions
 * @property Cotizaciones[] $cotizaciones
 * @property EncuestasResultados[] $encuestasResultadoses
 * @property OrdenesProduccion[] $ordenesProduccions
 */
class Clientes extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'clientes';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public $logo;

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('logo', 'file', 'types' => 'jpg, gif, png,pdf,tiff,jpeg,bmp', 'allowEmpty' => true, 'maxSize' => 2048000, 'on' => 'logo'),
            array('envia_mails_seguimiento, activo,idcondicion_iva', 'numerical', 'integerOnly' => true),
            array('cuit, idprovincia', 'length', 'max' => 11),
            array('idcondicion_iva', 'required','on'=>'logo'),
            array('cuit', 'unique'),
            
            array('razon_social, nombre_comercial, contacto, email, telefono, localidad', 'length', 'max' => 100),
            array('codigo_postal', 'length', 'max' => 20),
            array('idcondicion_iva,idarchivo_logo', 'length', 'max' => 10),
            array('fecha_alta, fecha_ultima_cotizacion_aprobada', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('logo, idcliente, cuit, razon_social, nombre_comercial, contacto, email, telefono, envia_mails_seguimiento, localidad, codigo_postal, idcondicion_iva, idarchivo_logo, idprovincia, fecha_alta, fecha_ultima_cotizacion_aprobada, activo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idarchivoLogo' => array(self::BELONGS_TO, 'Archivos', 'idarchivo_logo'),
            'idcondicionIva' => array(self::BELONGS_TO, 'CondicionesIva', 'idcondicion_iva'),
            'idprovincia0' => array(self::BELONGS_TO, 'Provincias', 'idprovincia'),
            'clientesAgentesRetencions' => array(self::HAS_MANY, 'ClientesAgentesRetencion', 'idcliente'),
            'cotizaciones' => array(self::HAS_MANY, 'Cotizaciones', 'idcliente'),
            'encuestasResultadoses' => array(self::HAS_MANY, 'EncuestasResultados', 'idcliente'),
            'ordenesProduccions' => array(self::HAS_MANY, 'OrdenesProduccion', 'idcliente'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
                return array(
                    'idcliente' => 'Nro Cliente',
                    'cuit' => 'Cuit',
                    'razon_social' => 'Razon Social',
                    'nombre_comercial' => 'Nombre Comercial',
                    'contacto' => 'Contacto',
                    'email' => 'Email',
                    'telefono' => 'Telefono',
                    'envia_mails_seguimiento' => 'Envia Mails Seguimiento',
                    'localidad' => 'Localidad',
                    'codigo_postal' => 'Codigo Postal',
                    'idcondicion_iva' => 'Condicion de IVA',
                    'idarchivo_logo' => 'Logo',
                    'idprovincia' => 'Provincia',
                    'fecha_alta' => 'Fecha Alta',
                    'fecha_ultima_cotizacion_aprobada' => 'Fecha Ultima Cotizacion Aprobada',
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

        $criteria->compare('idcliente', $this->idcliente, true);
        $criteria->compare('cuit', $this->cuit, true);
        $criteria->compare('razon_social', $this->razon_social, true);
        $criteria->compare('nombre_comercial', $this->nombre_comercial, true);
        $criteria->compare('contacto', $this->contacto, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('telefono', $this->telefono, true);
        $criteria->compare('envia_mails_seguimiento', $this->envia_mails_seguimiento);
        $criteria->compare('localidad', $this->localidad, true);
        $criteria->compare('codigo_postal', $this->codigo_postal, true);
        $criteria->compare('idcondicion_iva', $this->idcondicion_iva, true);
        $criteria->compare('idarchivo_logo', $this->idarchivo_logo);
        $criteria->compare('idprovincia', $this->idprovincia, true);
        $criteria->compare('fecha_alta', $this->fecha_alta, true);
        $criteria->compare('fecha_ultima_cotizacion_aprobada', $this->fecha_ultima_cotizacion_aprobada, true);
        $criteria->compare('activo', 1);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Clientes the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
