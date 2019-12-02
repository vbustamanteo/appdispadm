<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dependencia */

$this->title = $model->dep_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dependencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cambiar', ['update', 'id' => $model->dep_iCodigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->dep_iCodigo], [
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
            'dep_iCodigo',
            'dep_vcCodigo',
            'dep_vcNombre',
        ],
    ]) ?>

</div>
