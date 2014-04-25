<?php

class ClientesController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/abms';
    public $paginaactual = "Clientes";
    public $paginamenutabstop = 'ABMs';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'index', 'view', 'admin', 'delete', 'buscar'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->paginamenutabstop = "ABMs";
        $agentes = ClientesAgentesRetencion::model()->findAllByAttributes(array('idcliente' => $id, 'activo' => 1));
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'agentes' => $agentes,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->paginamenutabstop = "ABMs";
        $model = new Clientes('logo');
        $modelAgenteIVA = new ClientesAgentesRetencion;
        $modelAgenteIVA->scenario = "iva";
        $modelAgenteIVA->idagente_retencion = 1;


        $modelAgenteIIBB = new ClientesAgentesRetencion;
        $modelAgenteIIBB->scenario = "iibb";
        $modelAgenteIIBB->idagente_retencion = 2;

        $modelAgenteGanancias = new ClientesAgentesRetencion;
        $modelAgenteGanancias->scenario = "ganancias";
        $modelAgenteGanancias->idagente_retencion = 3;
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);
        $modelArchivo = new Archivos;
        $modelArchivo->scenario = 'logo';
        if (isset($_POST['Clientes'])) {
            $model->attributes = $_POST['Clientes'];

            $model->logo = CUploadedFile::getInstance($model, 'logo');


            if ($model->logo != "") {
                $modelArchivo = $this->procesarLogo($model);
                if ($modelArchivo->idarchivo != "") {
                    $model->idarchivo_logo = $modelArchivo->idarchivo;
                }
            }

            if ($model->save()) {
                if (isset($_POST['ClientesAgentesRetencionIVA'])) {
                    $modelAgenteIVA->attributes = $_POST['ClientesAgentesRetencionIVA'];
                    $modelAgenteIVA->idcliente = $model->idcliente;
                    if ($modelAgenteIVA->validate()) {
                        $modelAgenteIVA->save();
                    } else {
                        echo "1";
                        print_r($modelAgenteIVA->getErrors());
                    }
                }
                if (isset($_POST['ClientesAgentesRetencionIIBB'])) {
                    $modelAgenteIIBB->attributes = $_POST['ClientesAgentesRetencionIIBB'];
                    $modelAgenteIIBB->idcliente = $model->idcliente;
                    if ($modelAgenteIIBB->validate()) {
                        $modelAgenteIIBB->save();
                    } else {
                        echo "2";
                        print_r($modelAgenteIIBB->getErrors());
                    }
                }
                if (isset($_POST['ClientesAgentesRetencionGanancias'])) {
                    $modelAgenteGanancias->attributes = $_POST['ClientesAgentesRetencionGanancias'];
                    $modelAgenteGanancias->idcliente = $model->idcliente;
                    if ($modelAgenteGanancias->validate()) {
                        $modelAgenteGanancias->save();
                    } else {
                        echo "3";
                        print_r($modelAgenteGanancias->getErrors());
                    }
                }

                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model, 'modelArchivo' => $modelArchivo,
            'modelAgenteGanancias' => $modelAgenteGanancias,
            'modelAgenteIIBB' => $modelAgenteIIBB,
            'modelAgenteIVA' => $modelAgenteIVA,
        ));
    }

    public function procesarLogo
    ($model) {

        $modelArchivo = new Archivos('logo');

        $ruta = Yii::app()->params['upload_path_base'] . "logos" . date('/Y/m/d/');
        if (!file_exists($ruta)) {
            mkdir($ruta, 0755, true);
        }
        $archivo = $ruta . $model->logo;
        $ruta_archivo = "/logos" . date('/Y/m/d/') . $model->logo;
        $modelArchivo->ruta_archivo = $ruta_archivo;
        $modelArchivo->nombre_archivo = $model->logo;
        $model->logo->saveAs($archivo);
        $modelArchivo->save();

        return $modelArchivo;
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {

        $this->paginamenutabstop = "ABMs";
        $model = $this->loadModel($id);
        $modelAgenteIVA = ClientesAgentesRetencion::model()->findByAttributes(array('idcliente' => $id, 'idagente_retencion' => 1));


        $modelAgenteIIBB = ClientesAgentesRetencion::model()->findByAttributes(array('idcliente' => $id, 'idagente_retencion' => 2));


        $modelAgenteGanancias = ClientesAgentesRetencion::model()->findByAttributes(array('idcliente' => $id, 'idagente_retencion' => 3));

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Clientes'])) {
            $model->attributes = $_POST['Clientes'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idcliente));
        }

        $this->render('update', array(
            'model' => $model,
            'modelAgenteGanancias' => $modelAgenteGanancias,
            'modelAgenteIIBB' => $modelAgenteIIBB,
            'modelAgenteIVA' => $modelAgenteIVA,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $model = $this->loadModel($id);
        $model->activo = 0;
        $model->save();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {

        $this->paginamenutabstop = "ABMs";
        $dataProvider = new CActiveDataProvider('Clientes');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

//  Buscar por ajax para cotizaciones y reportes
    public function actionBuscar() {
        if (isset($_GET['term'])) {

            $criteria = new CDbCriteria;
            $criteria->alias = "cli";
            $criteria->condition = "cli.razon_social like '%" . $_GET['term'] . "%' or cli.cuit like '%" . $_GET['term'] . "%'";
            $criteria->order = 'razon_social';
            $criteria->limit = 30;

            $clientes = Clientes::model()->findAll($criteria);
            $return_array = array();
            foreach ($clientes as $cliente) {
                $return_array[] = array(
                    'label' => $cliente->razon_social,
                    'value' => $cliente->razon_social,
                    'id' => $cliente->idcliente,
                );
            }
            echo CJSON::encode($return_array);
        }
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {

        $this->paginamenutabstop = "ABMs";
        $model = new Clientes('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Clientes']))
            $model->attributes = $_GET['Clientes'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Clientes the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Clientes::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Clientes $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'clientes-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
