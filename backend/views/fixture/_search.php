<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FixtureSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fixture-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'match_id') ?>

    <?= $form->field($model, 'team_id') ?>

    <?= $form->field($model, 'captain_id') ?>

    <?= $form->field($model, 'score') ?>

    <?php // echo $form->field($model, 'wicket_lost') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'point') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
