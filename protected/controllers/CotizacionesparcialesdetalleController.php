<?php

class CotizacionesparcialesdetalleController extends Controller {

    public $layout = '//layouts/column1';
    public $paginamenutabstop = 'Cotizaciones';

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
                'actions' => array('paso2','create', 'update', 'admin', 'delete'),
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
    public function actionCreate($id) {
        $model = new CotizacionesParcialesDetalle;
        $model->unsetAttributes();
        $model->idcotizacion_parcial=$id;
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['CotizacionesParcialesDetalle'])) {
            $model->attributes = $_POST['CotizacionesParcialesDetalle'];
            if ($model->save())
                $this->redirect(array('paso2', 'id' => $model->idcotizacion_parcial_detalle));
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
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['CotizacionesParcialesDetalle'])) {
            
            $model->cantidad = $_POST['CotizacionesParcialesDetalle']['cantidad'];
            
            if ($model->save())
                $this->redirect(array('paso2', 'id' => $model->idcotizacion_parcial_detalle));
        }

        $this->render('create', array(
            'model' => $model,
        ));

    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $model=$this->loadModel($id);
        $model->activo=0;
        $model->save();
// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('CotizacionesParcialesDetalle');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin($id) {
        $model = new CotizacionesParcialesDetalle('search');
        $model->unsetAttributes();  // clear any default values
        $model->activo = 1;
        $model->idcotizacion_parcial = $id;
        if (isset($_GET['CotizacionesParcialesDetalle']))
            $model->attributes = $_GET['CotizacionesParcialesDetalle'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return CotizacionesParcialesDetalle the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = CotizacionesParcialesDetalle::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CotizacionesParcialesDetalle $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'cotizaciones-parciales-detalle-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionPaso2($id) {
        $model = $this->loadModel($id);
        $modelPrecioUnitario = ProductosPreciosUnitarios::model()->findByAttributes(array('idproducto' => $model->idcotizacionParcial->idproducto, 'activo' => 1),array('condition'=>'cantidad<=:cantidad',
        'params'=>array(':cantidad'=>$model->cantidad)),array('order'=>'cantidad DESC'));
        $modelColImpPrecioUnitario = ImpresionesTiposColoresPreciosUnitarios::model()->findByAttributes(array('activo' => 1, 'idimpresion_tipo' => $model->idcotizacionParcial->idimpresion_tipo, 'idimpresion_color' => $model->idcotizacionParcial->idimpresion_colores),array('condition'=>'cantidad<=:cantidad',
        'params'=>array(':cantidad'=>$model->cantidad)),array('order'=>'cantidad DESC'));
        $model->scenario = "paso2";
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['CotizacionesParcialesDetalle'])) {
            $model->attributes = $_POST['CotizacionesParcialesDetalle'];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->idcotizacion_parcial));
        }

        $this->render('create_paso2', array(
            'model' => $model,
            'modelPrecioUnitario' => $modelPrecioUnitario,
            'modelColImpPrecioUnitario' => $modelColImpPrecioUnitario,
        ));
    }

}
