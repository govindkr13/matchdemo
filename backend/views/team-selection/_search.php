<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeamSelectionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-selection-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tournament_id') ?>

    <?= $form->field($model, 'team_id') ?>

    <?= $form->field($model, 'player_id') ?>

    <?= $form->field($model, 'is_available') ?>

    <?php // echo $form->field($model, 'unavailability_reason') ?>

    <?php // echo $form->field($model, 'selected_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
