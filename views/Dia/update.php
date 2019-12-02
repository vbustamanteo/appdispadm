<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dia */

$this->title = 'Cambiar Día: ' . $model->dia_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Dias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dia_iCodigo, 'url' => ['view', 'id' => $model->dia_iCodigo]];
$this->params['breadcrumbs'][] = 'Cambiar';
?>
<div class="dia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
