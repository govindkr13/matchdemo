<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Score */

$this->title = Yii::t('app', 'Update Score: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Scores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="score-update box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'matches' => $matches,
        'players' => $players
    ]) ?>

</div>
