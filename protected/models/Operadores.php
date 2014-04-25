<?php

/**
 * This is the model class for table "operadores".
 *
 * The followings are the available columns in table 'operadores':
 * @property integer $idoperador
 * @property string $nombre
 * @property string $apellido
 * @property string $usuario
 * @property string $password
 * @property string $email
 * @property integer $idoperador_tipo
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Cotizaciones[] $cotizaciones
 * @property OperadoresTipos $idoperadorTipo
 * @property OperadoresPorcentajes[] $operadoresPorcentajes
 */
class Operadores extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public $password_new;
    public $password_new_repeat;

    public function tableName() {
        return 'operadores';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('idoperador_tipo, activo', 'numerical', 'integerOnly' => true),
            array('nombre, apellido, usuario, email', 'length', 'max' => 100),
            array('password', 'length', 'max' => 128),
            array('email', 'email', 'message' => 'El mail no es válido'),
            array('email,usuario','unique'),
            array('password,password_new,password_new_repeat', 'required', 'on' => 'password'),
            array('password_new', 'compare', 'compareAttribute' => 'password_new_repeat', 'on' => 'password'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idoperador, nombre, apellido, usuario, password, email, idoperador_tipo, activo', 'safe', 'on' => 'search'),
            array('nombre, apellido, usuario, email', 'safe', 'on' => 'actualizar'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'cotizaciones' => array(self::HAS_MANY, 'Cotizaciones', 'idoperador'),
            'idoperadorTipo' => array(self::BELONGS_TO, 'OperadoresTipos', 'idoperador_tipo'),
            'operadoresPorcentajes' => array(self::HAS_MANY, 'OperadoresPorcentajes', 'idoperador'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        switch ($this->scenario) {
            case 'password':
                return array(
                    'idoperador' => 'Idoperador',
                    'nombre' => 'Nombre',
                    'apellido' => 'Apellido',
                    'usuario' => 'Usuario',
                    'password' => 'Contraseña anterior',
                    'password_new' => 'Contraseña nueva',
                    'password_new_repeat' => 'Confirmar contraseña nueva',
                    'email' => 'Email',
                    'idoperador_tipo' => 'Idoperador Tipo',
                    'activo' => 'Activo',
                );
                break;
            default:
                return array(
                    'idoperador' => 'Idoperador',
                    'nombre' => 'Nombre',
                    'apellido' => 'Apellido',
                    'usuario' => 'Usuario',
                    'password' => 'Password',
                    'email' => 'Email',
                    'idoperador_tipo' => 'Idoperador Tipo',
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

        $criteria->compare('idoperador', $this->idoperador);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('apellido', $this->apellido, true);
        $criteria->compare('usuario', $this->usuario, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('idoperador_tipo', $this->idoperador_tipo);
        $criteria->compare('activo', $this->activo);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellido;
    }
    public function afterFind() {
        if ($this->scenario == "actualizar") {

            $this->password = "";
        }
        return true;
    }

    public function beforeSave() {
        if ($this->scenario == "actualizar") {

            $this->password = hash('sha512', $this->password);
        }
        return true;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Operadores the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
