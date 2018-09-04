<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Fixture */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fixture-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'match_id')->dropDownList(
        $matches,
        ['prompt' => 'Select Match']
    ) ?>

    <?= $form->field($model, 'team_id')->dropDownList(
        $teams,
        ['prompt' => 'Select Team']
    ) ?>

    <?= $form->field($model, 'captain_id')->dropDownList(
        $players,
        ['prompt' => 'Select Players']
    ) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'wicket_lost')->dropDownList(
        range(0,10,1),
        ['prompt' => 'Select Wicket Lost']
    ) ?>

    <?= $form->field($model, 'result')->dropDownList(
        \common\helpers\Html::getConstantList('RESULT_', \common\models\Fixture::class),
        ['prompt' => 'Select Result']
    ) ?>

    <?= $form->field($model, 'point')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
