<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Escuela */

$this->title = 'Cambiar Escuela: ' . $model->esc_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Escuelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->esc_iCodigo, 'url' => ['view', 'id' => $model->esc_iCodigo]];
$this->params['breadcrumbs'][] = 'Cambiar';
?>
<div class="escuela-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
