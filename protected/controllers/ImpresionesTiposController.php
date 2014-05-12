<?php

class ImpresionesTiposController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/abms';
    public $paginaactual = "ImpresionesTipos";
    public $paginamenutabstop = "ABMs";

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
                'actions' => array('create', 'update', 'admin', 'colores', 'deleteprecio'),
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

        $model = new ImpresionesTipos;
        $model->unsetAttributes();
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ImpresionesTipos'])) {
            $model->attributes = $_POST['ImpresionesTipos'];
            $model->activo = 1;
            if ($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionColores($id) {
        $model = new ImpresionesTiposColoresPreciosUnitarios('search');
        $model->idimpresion_tipo = $id;
        $model->activo = 1;
        $modelInsert = new ImpresionesTiposColoresPreciosUnitarios('insert');
        $modelInsert->activo = 1;
        $modelInsert->idimpresion_tipo = $id;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ImpresionesTiposColoresPreciosUnitarios'])) {

            $modelInsert->attributes = $_POST['ImpresionesTiposColoresPreciosUnitarios'];
            $existe = ImpresionesTiposColoresPreciosUnitarios::model()->findAllByAttributes(
                    array('activo' => 1, 'idimpresion_tipo' => $id, 'idimpresion_color' => $modelInsert->idimpresion_color, 'cantidad' => $modelInsert->cantidad));

            if (sizeof($existe) == 0) {
                if ($modelInsert->validate()) {
                    $modelInsert->save();

                    $this->redirect(array('colores', 'id' => $modelInsert->idimpresion_tipo, '#' => $modelInsert->idimpresion_color));
                }
            } else {
                $modelInsert->validate();
                $modelInsert->addError("cantidad", "la cantidad elegida ya esta asociada a un precio, por favor verificar.");
            }
        }


        $this->render('precios_colores', array('model' => $model, 'modelInsert' => $modelInsert));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ImpresionesTipos'])) {
            $model->attributes = $_POST['ImpresionesTipos'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idimpresion_tipo));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeleteprecio($id) {
        $model = ImpresionesTiposColoresPreciosUnitarios::model()->findByPk($id);
        $model->activo = 0;
        $model->save();

        $this->redirect(array('colores', 'id' => $model->idimpresion_tipo, '#' => $model->idimpresion_color));
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('ImpresionesTipos');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new ImpresionesTipos('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ImpresionesTipos']))
            $model->attributes = $_GET['ImpresionesTipos'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ImpresionesTipos the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ImpresionesTipos::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ImpresionesTipos $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'impresiones-tipos-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
