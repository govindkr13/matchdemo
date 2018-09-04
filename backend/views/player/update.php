<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Player */

$this->title = Yii::t('app', 'Update Player: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Players'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="player-update box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'countries' => $countries
    ]) ?>

</div>
