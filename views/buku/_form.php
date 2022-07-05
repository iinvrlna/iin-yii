<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_buku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pengarang')->textInput() ?>

    <?= $form->field($model, 'id_penerbit')->textInput() ?>

    <?= $form->field($model, 'id_pembeli')->textInput() ?>

    <?= $form->field($model, 'id_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
