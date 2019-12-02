<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Condicion */

$this->title = 'Cambiar Condición: ' . $model->con_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Condiciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->con_iCodigo, 'url' => ['view', 'id' => $model->con_iCodigo]];
$this->params['breadcrumbs'][] = 'Cambiar';
?>
<div class="condicion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
