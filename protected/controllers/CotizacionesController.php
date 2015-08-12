<?php
class CotizacionesController extends Controller {



    /**

     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning

     * using two-column layout. See 'protected/views/layouts/column2.php'.

     */

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

                'actions' => array('pdf','create', 'update','admin', 'delete','finalizar'),

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

    public function actionPdf($id) {

        $model=$this->loadModel($id);

        $cliente=Clientes::model()->findByPk($model->idcliente);

       

        $html2pdf = Yii::app()->ePdf->HTML2PDF();
        //$html2pdf->SetTitle($model->idcliente0->razon_social." - Cotizacion Nro ".$model->idcotizacion);
        $html2pdf->WriteHTML($this->renderPartial('pdf', array('model'=>$model,'cliente'=>$cliente), true));

        $html2pdf->output('etc.pdf',EYiiPdf::OUTPUT_TO_BROWSER);


        // ES INTERESANTE, PERO YA ESTÁ HECHO
        /*$mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
        $mPDF1->useOnlyCoreFonts = true;
        $mPDF1->SetTitle("JuzgadoSys - Reporte");
        $mPDF1->SetAuthor("JuzgadoSys");
        $mPDF1->SetWatermarkText("JuzgadoSys");
        $mPDF1->showWatermarkText = true;
        $mPDF1->watermark_font = 'DejaVuSansCondensed';
        $mPDF1->watermarkTextAlpha = 0.1;
        $mPDF1->SetDisplayMode('fullpage');
        $mPDF1->WriteHTML($this->renderPartial('pdf', array('model'=>$model,'cliente'=>$cliente), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
        $mPDF1->Output('Reporte_Productos'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
        exit;*/

    }

    /**

     * Creates a new model.

     * If creation is successful, the browser will be redirected to the 'view' page.

     */

    public function actionCreate() {

        $model = new Cotizaciones;

        $model->unsetAttributes();

        // Uncomment the following line if AJAX validation is needed

        // $this->performAjaxValidation($model);



        if (isset($_POST['Cotizaciones'])) {

            $model->attributes = $_POST['Cotizaciones'];

            if ($model->save())

                $this->redirect(array('cotizacionesparciales/admin', 'id' => $model->idcotizacion));

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



        if (isset($_POST['Cotizaciones'])) {

            $model->attributes = $_POST['Cotizaciones'];

            if ($model->save())

                $this->redirect(array('admin'));

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

        $dataProvider = new CActiveDataProvider('Cotizaciones');

        $this->render('index', array(

            'dataProvider' => $dataProvider,

        ));

    }



    /**

     * Manages all models.

     */

    public function actionAdmin() {

        $model = new Cotizaciones('search');

        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Cotizaciones']))
            $model->attributes = $_GET['Cotizaciones'];



        $this->render('admin', array(

            'model' => $model,

        ));

    }

	
	public function actionFinalizar($id) {

        $model=$this->loadModel($id);
		$model->idcotizacion_estado=2;
		$model->save();
        $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));

    }


    /**

     * Returns the data model based on the primary key given in the GET variable.

     * If the data model is not found, an HTTP exception will be raised.

     * @param integer $id the ID of the model to be loaded

     * @return Cotizaciones the loaded model

     * @throws CHttpException

     */

    public function loadModel($id) {

        $model = Cotizaciones::model()->findByPk($id);

        if ($model === null)

            throw new CHttpException(404, 'The requested page does not exist.');

        return $model;

    }



    /**

     * Performs the AJAX validation.

     * @param Cotizaciones $model the model to be validated

     */

    protected function performAjaxValidation($model) {

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'cotizaciones-form') {

            echo CActiveForm::validate($model);

            Yii::app()->end();

        }

    }



}