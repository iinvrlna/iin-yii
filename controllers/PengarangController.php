<?php

namespace app\controllers;

use app\models\Pengarang;
use app\models\PengarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PengarangController implements the CRUD actions for Pengarang model.
 */
class PengarangController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pengarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PengarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengarang model.
     * @param int $id_pengarang Id Pengarang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pengarang)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pengarang),
        ]);
    }

    /**
     * Creates a new Pengarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pengarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pengarang' => $model->id_pengarang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pengarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pengarang Id Pengarang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pengarang)
    {
        $model = $this->findModel($id_pengarang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pengarang' => $model->id_pengarang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pengarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pengarang Id Pengarang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pengarang)
    {
        $this->findModel($id_pengarang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pengarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pengarang Id Pengarang
     * @return Pengarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pengarang)
    {
        if (($model = Pengarang::findOne(['id_pengarang' => $id_pengarang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
