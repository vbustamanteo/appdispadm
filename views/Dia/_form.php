<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dia_iCodigo')->textInput() ?>

    <?= $form->field($model, 'dia_vcNombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
