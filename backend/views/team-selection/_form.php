<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamSelection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-selection-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tournament_id')->dropDownList(
        $tournaments,
        ['prompt' => 'Select Tournament']
    ) ?>

    <?= $form->field($model, 'team_id')->dropDownList(
        $teams,
        ['prompt' => 'Select Team']
    ) ?>

    <?= $form->field($model, 'player_id')->dropDownList(
        $players,
        ['prompt' => 'Select Player']
    ) ?>

    <?= $form->field($model, 'is_available')->checkbox() ?>

    <?= $form->field($model, 'unavailability_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'selected_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
