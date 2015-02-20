<?php

class ProductosTiposMaterialesController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/abms';
    public $paginaactual = 'ProductosTipos';
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
                'actions' => array('create', 'update', 'admin', 'delete'),
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new ProductosTiposMateriales;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ProductosTiposMateriales'])) {
            $model->attributes = $_POST['ProductosTiposMateriales'];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->idproducto_tipo));
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

        if (isset($_POST['ProductosTiposMateriales'])) {
            $model->attributes = $_POST['ProductosTiposMateriales'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idproducto_tipo_material));
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
        $dataProvider = new CActiveDataProvider('ProductosTiposMateriales');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin($id) {

        $model = new ProductosTiposMateriales('search');
        $model->unsetAttributes();
        $model->idproducto_tipo = $id;
        $model->activo = true;
        if (isset($_POST['ProductosTiposMateriales'])) {
            $modeltosave = new ProductosTiposMateriales;
            $modeltosave->attributes = $_POST['ProductosTiposMateriales'];
            $modeltosave->idproducto_tipo = $id;
            $modeltosave->activo = true;
            if ($modeltosave->save())
                Yii::app()->user->setFlash('success', "El material " . $modeltosave->idmaterial0->descripcion . " se ha agregado con éxito!");
        }
        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ProductosTiposMateriales the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ProductosTiposMateriales::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ProductosTiposMateriales $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'productos-tipos-materiales-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
