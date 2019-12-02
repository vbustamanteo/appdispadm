<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Semestre */

$this->title = $model->sem_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Semestres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="semestre-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cambiar', ['update', 'id' => $model->sem_iCodigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->sem_iCodigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro de borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sem_iCodigo',
            'sem_vcCodigo',
            'sem_dFechaInicioDisp',
            'sem_dFechaFinDisp',
            'sem_cActivo',
        ],
    ]) ?>

</div>
