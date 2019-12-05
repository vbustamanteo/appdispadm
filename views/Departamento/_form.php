<?php

use app\models\Dependencia;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Departamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'depto_vcNombre')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'dep_iCodigo')->textInput() ?> -->
    <?php $dependenciaArray =
        ArrayHelper::map(
                Dependencia::find()->orderBy('dep_vcNombre')->all(),
                'dep_iCodigo',
                'dep_vcNombre'
        )
    ?>
    <?= $form->field(
            $model,
            'dep_iCodigo')->dropDownList(
                    $dependenciaArray,
                    ['prompt' => '---- Seleccione dependencia ----']
            )->label('Dependencia')
    ?>
    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
