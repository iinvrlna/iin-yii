<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengarang */

$this->title = 'Update Pengarang: ' . $model->id_pengarang;
$this->params['breadcrumbs'][] = ['label' => 'Pengarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengarang, 'url' => ['view', 'id_pengarang' => $model->id_pengarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
