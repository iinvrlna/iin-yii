<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BelajarYii;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BelajarYiiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Belajar Yiis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="belajar-yii-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Belajar Yii', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'jurusan',
            'alamat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BelajarYii $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
