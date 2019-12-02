<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Condicion */

$this->title = $model->con_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Condiciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="condicion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cambiar', ['update', 'id' => $model->con_iCodigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->con_iCodigo], [
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
            'con_iCodigo',
            'con_vcNombre',
        ],
    ]) ?>

</div>
