<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Condicion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="condicion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'con_iCodigo')->textInput() ?>

    <?= $form->field($model, 'con_vcNombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
