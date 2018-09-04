<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tournament_id') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'first_field_umpire') ?>

    <?php // echo $form->field($model, 'second_field_umpire') ?>

    <?php // echo $form->field($model, 'tv_umpire') ?>

    <?php // echo $form->field($model, 'referee') ?>

    <?php // echo $form->field($model, 'best_player') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
