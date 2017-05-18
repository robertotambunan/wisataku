<?php

namespace frontend\controllers;

use Yii;
use app\models\AplikasiPariwisata;
use app\models\AplikasiPariwisataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use yii\httpclient\Client;
use yii\helpers\Json;
/**
 * AplikasiPariwisataController implements the CRUD actions for AplikasiPariwisata model.
 */
class AplikasiPariwisataController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AplikasiPariwisata models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AplikasiPariwisataSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
   $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
   
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AplikasiPariwisata model.
     * @param integer $id
     * @return mixed
     */
//    public function actionView($id)
//    {
//        $client = new Client(['baseUrl' => 'http://localhost:4136/Konfigurasi/']);
//    $response = $client->createRequest()
//      ->setUrl('GetNamaAplikasi')
//      ->addHeaders(['content-type' => 'application/json'])
//      ->send();
//    $data = Json::decode($response->content);
//    $nilai;
//    foreach ($data as $key => $value) {
//        $nilai = $value['nama_aplikasi'];
//    }
//
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//            'nilai' => $nilai,
//        ]);
//    }

    /**
     * Creates a new AplikasiPariwisata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AplikasiPariwisata();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_aplikasipariwisata]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AplikasiPariwisata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_aplikasipariwisata]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AplikasiPariwisata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AplikasiPariwisata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AplikasiPariwisata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AplikasiPariwisata::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
