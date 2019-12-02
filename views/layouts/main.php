<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= Url::to( '@web/favicons/apple-touch-icon.png' ) ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Url::to( '@web/favicons/graduation-32-7936.png' ) ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Url::to( '@web/favicons/graduation-16-7936.png' ) ?>">
    <link rel="manifest" href="<?= Url::to( '@web/favicons/manifest.json' ) ?>">
    <link rel="mask-icon" href="<?= Url::to( '@web/favicons/safari-pinned-tab.svg' ) ?>" color="#5bbad5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Disponibilidad Docente',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Tablas', 'visible' => !Yii::$app->user->isGuest, 'items' =>
                [
                    ['label' => 'Docentes', 'url' => '/docente/index'],
                    ['label' => 'Categorías', 'url' => '/categoria/index'],
                    '<li class="divider"></li>',
                    ['label' => 'Departamentos acaddémicos', 'url' => '/departamento/index'],
                    ['label' => 'Dependencias', 'url' => '/dependencia/index'],
                    ['label' => 'Escuelas', 'url' => '/escuela/index'],
                    '<li class="divider"></li>',
                    ['label' => 'Distritos', 'url' => '/distrito/index'],
                    ['label' => 'Condición del docente', 'url' => '/condicion/index'],
                    ['label' => 'Estado del docente', 'url' => '/estado/index'],
                    ['label' => 'Tipo de servidor', 'url' => '/tipo/index'],
                    ['label' => 'Días de la semana', 'url' => '/dia/index'],
                ]
            ],
            ['label' => 'Disponibilidad', 'visible' => !Yii::$app->user->isGuest, 'items' =>
                [
                    ['label' => 'Semestres', 'url' => '/semestre/index'],
                    ['label' => 'Activar semestre', 'url' => '/semestre/semestreactivarsem'],
                    '<li class="divider"></li>',
                    ['label' => 'Docentes que han llenado disponibilidad', 'url' => '/consulta/docentedisponibilidad'],
                    ['label' => 'Docentes que no han llenado disponibilidad', 'url' => '/consulta/docentesindisponibilidad'],
                ]
            ],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">UNMSM - FISI <?= date('Y') ?></p>
        <p class="pull-right">Ver 1.0</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
