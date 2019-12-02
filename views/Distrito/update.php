<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Distrito */

$this->title = 'Cambiar Distrito: ' . $model->dis_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Distritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dis_iCodigo, 'url' => ['view', 'id' => $model->dis_iCodigo]];
$this->params['breadcrumbs'][] = 'Cambiar';
?>
<div class="distrito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
