<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Docente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="docente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doc_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcDni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcTipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcPaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcMaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_iCodigo')->textInput() ?>

    <?= $form->field($model, 'tipo_iCodigo')->textInput() ?>

    <?= $form->field($model, 'est_iCodigo')->textInput() ?>

    <?= $form->field($model, 'est_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'con_iCodigo')->textInput() ?>

    <?= $form->field($model, 'dis_iCodigo')->textInput() ?>

    <?= $form->field($model, 'doc_vcDireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_iCodigo')->textInput() ?>

    <?= $form->field($model, 'dep_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcFacultad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expadm_iCodigo')->textInput() ?>

    <?= $form->field($model, 'carunm_iCodigo')->textInput() ?>

    <?= $form->field($model, 'doc_vcTelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcCelular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcEmail2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_vcIpHost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_dNacimiento')->textInput() ?>

    <?= $form->field($model, 'doc_iFoto')->textInput() ?>

    <?= $form->field($model, 'doc_vcClave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depto_iCodigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
