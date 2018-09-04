<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeamSelection */

$this->title = Yii::t('app', 'Update Team Selection: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Team Selections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="team-selection-update box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'tournaments' => $tournaments,
        'teams' => $teams,
        'players' => $players
    ]) ?>

</div>
