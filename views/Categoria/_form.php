<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_vcNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_iHoras')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
