<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SemestreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Semestres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semestre-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Semestre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sem_iCodigo',
            'sem_vcCodigo',
            'sem_dFechaInicioDisp',
            'sem_dFechaFinDisp',
            'sem_cActivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
