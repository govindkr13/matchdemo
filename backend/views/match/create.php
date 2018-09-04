<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Match */

$this->title = Yii::t('app', 'Create Match');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-create box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
        'tournaments' => $tournaments
    ]) ?>

</div>
