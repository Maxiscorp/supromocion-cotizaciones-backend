<?php

/**
 * This is the model class for table "agentes_retencion".
 *
 * The followings are the available columns in table 'agentes_retencion':
 * @property string $idagente_retencion
 * @property string $descripcion
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property ClientesAgentesRetencion[] $clientesAgentesRetencions
 */
class AgentesRetencion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agentes_retencion';
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
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idagente_retencion, descripcion, activo', 'safe', 'on'=>'search'),
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
			'clientesAgentesRetencions' => array(self::HAS_MANY, 'ClientesAgentesRetencion', 'idagente_retencion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idagente_retencion' => 'Idagente Retencion',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idagente_retencion',$this->idagente_retencion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AgentesRetencion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
