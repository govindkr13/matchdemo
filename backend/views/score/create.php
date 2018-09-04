<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Score */

$this->title = Yii::t('app', 'Create Score');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Scores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="score-create box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'matches' => $matches,
        'players' => $players
    ]) ?>

</div>
