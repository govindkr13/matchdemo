<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Match */

$this->title = Yii::t('app', 'Update Match: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="match-update box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'tournaments' => $tournaments
    ]) ?>

</div>
