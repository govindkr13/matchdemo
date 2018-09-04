<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Team */

$this->title = Yii::t('app', 'Create Team');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-create box box-primary">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
