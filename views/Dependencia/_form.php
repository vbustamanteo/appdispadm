<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dep_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_vcNombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
