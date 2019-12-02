<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Semestre */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semestre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sem_vcCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sem_dFechaInicioDisp')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Fecha de apertura ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
        ]
    ]) ?>

    <?= $form->field($model, 'sem_dFechaFinDisp')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Fecha de cierre ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
        ]
    ]) ?>

    <?php $sinoArray =
        [
          'S' => 'Si',
          'N' => 'No'
        ]
    ?>
    <?= $form->field(
            $model,
            'sem_cActivo')->dropDownList(
            $sinoArray,
            ['prompt' => '--']
        )->label('Activo')
    ?>

    <div class="form-group">
        <?= Html::submitButton('Grabar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
