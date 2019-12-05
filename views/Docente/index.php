<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DocenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Docentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Docente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'doc_iCodigo',
            'doc_vcCodigo',
            'doc_vcDni',
            // 'doc_vcTipo',
            'doc_vcPaterno',
            'doc_vcMaterno',
            'doc_vcNombre',
            'cat_vcCodigo',
            'cat_iCodigo',
            //'tipo_iCodigo',
            //'est_iCodigo',
            //'est_vcCodigo',
            //'con_iCodigo',
            //'dis_iCodigo',
            //'doc_vcDireccion',
            //'dep_iCodigo',
            //'dep_vcCodigo',
            //'doc_vcFacultad',
            //'expadm_iCodigo',
            //'carunm_iCodigo',
            //'doc_vcTelefono',
            //'doc_vcCelular',
            //'doc_vcEmail:email',
            //'doc_vcEmail2:email',
            //'doc_vcIpHost',
            //'doc_dNacimiento',
            //'doc_iFoto',
            //'doc_vcClave',
            //'depto_iCodigo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
