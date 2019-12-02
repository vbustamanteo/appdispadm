<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SemestreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semestre-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'sem_iCodigo') ?>

    <?= $form->field($model, 'sem_vcCodigo') ?>

    <?= $form->field($model, 'sem_dFechaInicioDisp') ?>

    <?= $form->field($model, 'sem_dFechaFinDisp') ?>

    <?= $form->field($model, 'sem_cActivo') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
