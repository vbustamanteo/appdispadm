<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Escuela */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escuela-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'esc_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esc_vcNombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
