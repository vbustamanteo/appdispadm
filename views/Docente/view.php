<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Docente */

$this->title = $model->doc_iCodigo;
$this->params['breadcrumbs'][] = ['label' => 'Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="docente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->doc_iCodigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->doc_iCodigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'doc_iCodigo',
            'doc_vcCodigo',
            'doc_vcDni',
            'doc_vcTipo',
            'doc_vcPaterno',
            'doc_vcMaterno',
            'doc_vcNombre',
            'cat_vcCodigo',
            'cat_iCodigo',
            'tipo_iCodigo',
            'est_iCodigo',
            'est_vcCodigo',
            'con_iCodigo',
            'dis_iCodigo',
            'doc_vcDireccion',
            'dep_iCodigo',
            'dep_vcCodigo',
            'doc_vcFacultad',
            'expadm_iCodigo',
            'carunm_iCodigo',
            'doc_vcTelefono',
            'doc_vcCelular',
            'doc_vcEmail:email',
            'doc_vcEmail2:email',
            'doc_vcIpHost',
            'doc_dNacimiento',
            'doc_iFoto',
            'doc_vcClave',
            'depto_iCodigo',
        ],
    ]) ?>

</div>
