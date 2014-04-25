<?php

class OperadoresController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/abms';
    public $paginamenutabstop='MisDatos';
    public $paginaactual = 'Operadores';

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
                'actions' => array('create', 'admin', 'delete', 'cambio', 'agregarporcentajes', 'deleteporcentaje'),
                'users' => array('@'),
                'expression' => 'Yii::app()->user->getState("administrador")==1',
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('update', 'password'),
                'users' => array('@'),
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->paginamenutabstop="ABMs";
        $model = new Operadores;
        $model->unsetAttributes();
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Operadores'])) {
            $model->attributes = $_POST['Operadores'];
            if ($model->save()) {
                $mail = Mails::model()->findByPk(1);

                $message = new YiiMailMessage;
                //this points to the file test.php inside the view path
                $message->setBody(str_replace("[usuario]", $model->usuario, $mail->cuerpo), "text/html");
                $message->subject = str_replace("[nombre]", $model->nombre . " " . $model->apellido, $mail->asunto);

                $message->addTo($model->email);
                $message->from = $mail->from;
                Yii::app()->mail->send($message);

                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionAgregarPorcentajes($id) {
        $this->paginamenutabstop="ABMs";
        $model = $this->loadModel($id);
        $modelOperadoresPorcentajes = new OperadoresPorcentajes('search');
        $modelOperadoresPorcentajes->unsetAttributes();
        $modelOperadoresPorcentajes->idoperador = $id;
        $modelOperadoresPorcentajes->activo = 1;
        $modelOperadorPorcentaje = new OperadoresPorcentajes;

        $modelOperadorPorcentaje->unsetAttributes();
        $modelOperadorPorcentaje->scenario = "insert";

        if (isset($_POST['OperadoresPorcentajes'])) {
            $modelOperadorPorcentaje->attributes = $_POST['OperadoresPorcentajes'];
            $existe = OperadoresPorcentajes::model()->findAllByAttributes(
                    array('activo' => 1, 'idoperador' => $id), array('condition' => ':desde between importe_desde and importe_hasta and :hasta between importe_desde and importe_hasta',
                'params' =>
                array(':desde' => $modelOperadorPorcentaje->importe_desde, ':hasta' => $modelOperadorPorcentaje->importe_hasta)));


            if (sizeof($existe) == 0) {



                $modelOperadorPorcentaje->activo = 1;
                $modelOperadorPorcentaje->idoperador = $id;
                if ($modelOperadorPorcentaje->validate()) {
                    $modelOperadorPorcentaje->save();

                    Yii::app()->user->setFlash('success', "el rango fue registrado con éxito! ");
                    $modelOperadorPorcentaje->unsetAttributes();
                    $modelOperadorPorcentaje->scenario = "insert";
                }
            } else {
                $modelOperadorPorcentaje->validate();
                $modelOperadorPorcentaje->addError("importe_desde", "El rango o parte del rango elegido ya esta asociado a un porcentaje, por favor verificar.");
                $modelOperadorPorcentaje->addError("importe_hasta", "El rango o parte del rango elegido ya esta asociado a un porcentaje, por favor verificar.");
            }
        }

        $this->render('agregar_porcentajes', array(
            'model' => $model,
            'modelOperadoresPorcentajes' => $modelOperadoresPorcentajes,
            'modelOperadorPorcentaje' => $modelOperadorPorcentaje,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($success = "ERROR") {

        $this->layout = "misdatos";
        
        $this->paginamenutabstop="MisDatos";
        $this->paginaactual = "Misdatos";
        if (isset($success)) {

            if ($success == "OK") {
                Yii::app()->user->setFlash('success', "Sus datos de han modificado con éxito!");
            }
        }
        $model = $this->loadModel(Yii::app()->user->getState('idoperador'));
        $model->scenario = "actualizar";
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Operadores'])) {

            $model->attributes = $_POST['Operadores'];
            $model->password = $model->password_new;
            if ($model->save())
                $this->redirect('update/success/OK');
        }
        $model->password = "";
        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionPassword($success = "ERROR") {
        $this->layout = "misdatos";
        
        $this->paginamenutabstop="MisDatos";
        $this->paginaactual = "Password";
        if (isset($success)) {

            if ($success == "OK") {
                Yii::app()->user->setFlash('success', "Sus contraseña de ha modificado con éxito!");
            }
        }
        $model = $this->loadModel(Yii::app()->user->getState('idoperador'));
        $model->scenario = "password";
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Operadores'])) {

            $model->attributes = $_POST['Operadores'];
            $model->password = $model->password_new;
            if ($model->save())
                $this->redirect('update/success/OK');
        }
        $model->password = "";
        $this->render('password', array(
            'model' => $model,
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

    public function actionDeletePorcentaje($id) {
        
        $this->paginamenutabstop="ABMs";
        $model = OperadoresPorcentajes::model()->findByPk($id);
        $model->activo = 0;
        $model->save();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionCambio($id, $idoperador_tipo) {
        $model = $this->loadModel($id);
        $model->idoperador_tipo = $idoperador_tipo;
        $model->save();
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Operadores');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        
        $this->paginamenutabstop="ABMs";
        $model = new Operadores('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Operadores']))
            $model->attributes = $_GET['Operadores'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Operadores the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Operadores::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Operadores $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'operadores-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
