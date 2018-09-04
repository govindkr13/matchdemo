<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Fixture */

$this->title = Yii::t('app', 'Create Fixture');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fixtures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fixture-create box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'matches' => $matches,
        'teams' => $teams,
        'players' => $players
    ]) ?>

</div>
