<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ScoreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="score-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'match_id') ?>

    <?= $form->field($model, 'player_id') ?>

    <?= $form->field($model, 'ball_played') ?>

    <?= $form->field($model, 'run_scored') ?>

    <?php // echo $form->field($model, 'batting_average') ?>

    <?php // echo $form->field($model, 'total_bowled') ?>

    <?php // echo $form->field($model, 'run_expenses') ?>

    <?php // echo $form->field($model, 'maiden') ?>

    <?php // echo $form->field($model, 'wicket_taken') ?>

    <?php // echo $form->field($model, 'balling_average') ?>

    <?php // echo $form->field($model, 'catch') ?>

    <?php // echo $form->field($model, 'stump') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
