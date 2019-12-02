<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipo */

$this->title = 'Cambiar Tipo: ' . $model->tipo_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipo_iCodigo, 'url' => ['view', 'id' => $model->tipo_iCodigo]];
$this->params['breadcrumbs'][] = 'Cambiar';
?>
<div class="tipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
