<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fixture */

$this->title = Yii::t('app', 'Update Fixture: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fixtures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fixture-update box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'matches' => $matches,
        'teams' => $teams,
        'players' => $players
    ]) ?>

</div>
