<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TeamSelection */

$this->title = Yii::t('app', 'Create Team Selection');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Team Selections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-selection-create box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'tournaments' => $tournaments,
        'teams' => $teams,
        'players' => $players
    ]) ?>

</div>
