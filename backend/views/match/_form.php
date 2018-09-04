<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Match */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tournament_id')->dropDownList(
        $tournaments,
        ['prompt' => 'Select Tournament']
    ) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'result')->dropDownList(
        \common\helpers\Html::getConstantList('RESULT_', \common\models\Match::class),
        ['prompt' => 'Select Result']
    ) ?>

    <?= $form->field($model, 'type')->dropDownList(
        \common\helpers\Html::getConstantList('TYPE_', \common\models\Match::class),
        ['prompt' => 'Select Type']
    ) ?>

    <?= $form->field($model, 'first_field_umpire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_field_umpire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tv_umpire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'best_player')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
