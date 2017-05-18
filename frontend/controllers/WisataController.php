<?php

namespace frontend\controllers;

use Yii;
use app\models\Wisata;
use app\models\WisataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WisataController implements the CRUD actions for Wisata model.
 */
class WisataController extends Controller
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
     * Lists all Wisata models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WisataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionLihatAplikasi($namaApp)
    {
        $AppMdl = \app\models\AplikasiPariwisata::findOne(['nama_aplikasi'=>$namaApp]);
        $id= $AppMdl->id_aplikasipariwisata;
        $searchModel = new WisataSearch();
        $dataProvider = $searchModel->searchID($id);

        return $this->render('lihataplikasi', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
                'namaApp'=>$namaApp
        ]);
    }

    /**
     * Displays a single Wisata model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($idWisata,$id)
    {
        
        return $this->render('view', [
            'id'=>$id,
            'model' => $this->findModel($idWisata),
        ]);
    }

    /**
     * Creates a new Wisata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
          $nama_aplikasi= 'test';
          $appMdl = \app\models\AplikasiPariwisata::findOne(['nama_aplikasi'=>$nama_aplikasi]);
//        $appMdl = new \app\models\AplikasiPariwisata();
//        $appMdl->nama_aplikasi=$nama_aplikasi;
//        $appMdl->save();
        $idApp = $appMdl->id_aplikasipariwisata;
           $model = new Wisata();

        if ($model->load(Yii::$app->request->post()))
        {
            //get the instance of the uploaded file
            $imageName= $model->nama_wisata;
            $model->file = \yii\web\UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('gambar/'.$imageName.'.'.$model->file->extension );
            $model->id_aplikasipariwisata=$idApp;
            //save the path in the db column
            $model->gambar_wisata='gambar/'.$imageName.'.'.$model->file->extension;
            $model->save();
            
             return $this->redirect(['view', 'idWisata' => $model->id_wisata,'id'=>$id]);
        } else {
            return $this->render('create', [
                'id'=>$id,
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Wisata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($idWisata,$id)
    {
        $model = $this->findModel($idWisata);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idWisata' => $model->id_wisata,'id'=>$id]);
        } else {
            return $this->render('update', [
                'id'=>$id,
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Wisata model.
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
     * Finds the Wisata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Wisata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wisata::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
