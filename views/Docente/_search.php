<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocenteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="docente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'doc_iCodigo') ?>

    <?= $form->field($model, 'doc_vcCodigo') ?>

    <?= $form->field($model, 'doc_vcDni') ?>

    <?= $form->field($model, 'doc_vcTipo') ?>

    <?= $form->field($model, 'doc_vcPaterno') ?>

    <?php // echo $form->field($model, 'doc_vcMaterno') ?>

    <?php // echo $form->field($model, 'doc_vcNombre') ?>

    <?php // echo $form->field($model, 'cat_vcCodigo') ?>

    <?php // echo $form->field($model, 'cat_iCodigo') ?>

    <?php // echo $form->field($model, 'tipo_iCodigo') ?>

    <?php // echo $form->field($model, 'est_iCodigo') ?>

    <?php // echo $form->field($model, 'est_vcCodigo') ?>

    <?php // echo $form->field($model, 'con_iCodigo') ?>

    <?php // echo $form->field($model, 'dis_iCodigo') ?>

    <?php // echo $form->field($model, 'doc_vcDireccion') ?>

    <?php // echo $form->field($model, 'dep_iCodigo') ?>

    <?php // echo $form->field($model, 'dep_vcCodigo') ?>

    <?php // echo $form->field($model, 'doc_vcFacultad') ?>

    <?php // echo $form->field($model, 'expadm_iCodigo') ?>

    <?php // echo $form->field($model, 'carunm_iCodigo') ?>

    <?php // echo $form->field($model, 'doc_vcTelefono') ?>

    <?php // echo $form->field($model, 'doc_vcCelular') ?>

    <?php // echo $form->field($model, 'doc_vcEmail') ?>

    <?php // echo $form->field($model, 'doc_vcEmail2') ?>

    <?php // echo $form->field($model, 'doc_vcIpHost') ?>

    <?php // echo $form->field($model, 'doc_dNacimiento') ?>

    <?php // echo $form->field($model, 'doc_iFoto') ?>

    <?php // echo $form->field($model, 'doc_vcClave') ?>

    <?php // echo $form->field($model, 'depto_iCodigo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
