<?php

class ProductosController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/abms';
    public $paginaactual = "Productos";

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
                'actions' => array('create', 'update', 'admin', 'paso2', 'delete'),
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
        $model = new Productos;
        $model->unsetAttributes();
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Productos'])) {
            $model->attributes = $_POST['Productos'];
            $model->activo = 1;
            if ($model->save())
                $this->redirect(array('paso2', 'id' => $model->idproducto));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionPaso2($id) {
        $model = $this->loadModel($id);
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);


        $archivos = CUploadedFile::getInstancesByName('Archivos[archivo]');
        if (isset($archivos) && count($archivos) > 0) {
            foreach ($archivos as $image => $pic) {

// add it to the main model now
                $ruta = Yii::app()->params['upload_path_base'] . "productos" . date('/Y/m/d/');
                if (!file_exists($ruta)) {
                    mkdir($ruta, 0755, true);
                }
                $archivo_guardar = $ruta . $pic;
                $ruta_archivo = "/productos" . date('/Y/m/d/') . $pic;
                $modelArchivosave = new Archivos;
                $modelArchivosave->ruta_archivo = $ruta_archivo;
                $modelArchivosave->nombre_archivo = $pic;
                $modelArchivosave->activo = 1;

                $pic->saveAs($archivo_guardar);
                $modelArchivosave->save();
                $modelProductosImagenessave = new ProductosImagenes;
                $modelProductosImagenessave->idarchivo = $modelArchivosave->idarchivo;
                $modelProductosImagenessave->idproducto = $id;
                $modelProductosImagenessave->activo = 1;
                $modelProductosImagenessave->save();
                Yii::app()->user->setFlash('success', "la imagen se ha subido con éxito! ");
		
            }
        }
        $modelProductosImagenes = new ProductosImagenes('search');
        $modelProductosImagenes->unsetAttributes();
        $modelProductosImagenes->idproducto = $id;
        $modelProductosImagenes->activo = 1;
        $modelArchivo = new Archivos('producto_imagenes_upload');

        $this->render('paso2', array(
            'model' => $model,
            'modelArchivo' => $modelArchivo,
            'modelProductosImagenes' => $modelProductosImagenes,
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

        if (isset($_POST['Productos'])) {
            $model->attributes = $_POST['Productos'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idproducto));
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

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Productos');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Productos('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Productos']))
            $model->attributes = $_GET['Productos'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Productos the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Productos::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Productos $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'productos-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
