<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Score */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="score-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'match_id')->dropDownList(
        $matches,
        ['prompt' => 'Select Match']
    ) ?>

    <?= $form->field($model, 'player_id')->dropDownList(
        $players,
        ['prompt' => 'Select Players']
    ) ?>

    <?= $form->field($model, 'ball_played')->textInput() ?>

    <?= $form->field($model, 'run_scored')->textInput() ?>

    <?= $form->field($model, 'batting_average')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_bowled')->textInput() ?>

    <?= $form->field($model, 'run_expenses')->textInput() ?>

    <?= $form->field($model, 'maiden')->textInput() ?>

    <?= $form->field($model, 'wicket_taken')->textInput() ?>

    <?= $form->field($model, 'balling_average')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catch')->textInput() ?>

    <?= $form->field($model, 'stump')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
