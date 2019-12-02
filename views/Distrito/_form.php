<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Distrito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distrito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dis_iCodigo')->textInput() ?>

    <?= $form->field($model, 'dis_vcNombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
