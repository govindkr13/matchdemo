<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Tournament */

$this->title = Yii::t('app', 'Create Tournament');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tournaments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-create box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
