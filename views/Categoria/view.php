<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Categoria */

$this->title = $model->cat_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Categorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="categoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cambiar', ['update', 'id' => $model->cat_iCodigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->cat_iCodigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro de borrar el item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cat_iCodigo',
            'cat_vcCodigo',
            'cat_vcNombre',
            'cat_iHoras',
        ],
    ]) ?>

</div>
