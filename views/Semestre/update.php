<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Semestre */

$this->title = 'Cambiar Semestre: ' . $model->sem_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Semestres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sem_iCodigo, 'url' => ['view', 'id' => $model->sem_iCodigo]];
$this->params['breadcrumbs'][] = 'Cambiar';
?>
<div class="semestre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
