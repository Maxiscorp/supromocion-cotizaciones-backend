<?php

/**
 * This is the model class for table "clientes_agentes_retencion".
 *
 * The followings are the available columns in table 'clientes_agentes_retencion':
 * @property string $idcliente_agente
 * @property string $idcliente
 * @property string $idagente_retencion
 * @property string $fecha_ingreso
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property AgentesRetencion $idagenteRetencion
 * @property Clientes $idcliente0
 */
class ClientesAgentesRetencion extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'clientes_agentes_retencion';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idagente_retencion', 'required'),
            array('activo', 'numerical', 'integerOnly' => true),
            array('idcliente', 'length', 'max' => 11),
            array('idagente_retencion', 'length', 'max' => 10),
            array('fecha_ingreso', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idcliente_agente, idcliente, idagente_retencion, fecha_ingreso, activo', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idagenteRetencion' => array(self::BELONGS_TO, 'AgentesRetencion', 'idagente_retencion'),
            'idcliente0' => array(self::BELONGS_TO, 'Clientes', 'idcliente'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        switch ($this->scenario) {
            case "iva":

                return array(
                    'idcliente_agente' => 'Idcliente Agente',
                    'idcliente' => 'Idcliente',
                    'idagente_retencion' => 'IVA',
                    'fecha_ingreso' => 'Fecha Ingreso',
                    'activo' => 'Activo',
                );
                break;
            case "iibb":

                return array(
                    'idcliente_agente' => 'Idcliente Agente',
                    'idcliente' => 'Idcliente',
                    'idagente_retencion' => 'Ingresos brutos',
                    'fecha_ingreso' => 'Fecha Ingreso',
                    'activo' => 'Activo',
                );
                break;
            case "ganancias":

                return array(
                    'idcliente_agente' => 'Idcliente Agente',
                    'idcliente' => 'Idcliente',
                    'idagente_retencion' => 'Ganancias',
                    'fecha_ingreso' => 'Fecha Ingreso',
                    'activo' => 'Activo',
                );
                break;
        }
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

        $criteria->compare('idcliente_agente', $this->idcliente_agente, true);
        $criteria->compare('idcliente', $this->idcliente, true);
        $criteria->compare('idagente_retencion', $this->idagente_retencion, true);
        $criteria->compare('fecha_ingreso', $this->fecha_ingreso, true);
        $criteria->compare('activo', $this->activo);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ClientesAgentesRetencion the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
