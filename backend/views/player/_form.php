<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Player */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-form box-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_id')->dropDownList(
        $countries,
        ['prompt' => 'Select Country']
    ) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->dropDownList(
        \common\helpers\Html::getConstantList('ROLE_', \common\models\Player::class),
        ['prompt' => 'Select Role']
    ) ?>

    <?= $form->field($model, 'jersey_number')->textInput() ?>

    <?= $form->field($model, 'debut_at')->textInput() ?>

    <?= $form->field($model, 'retire_at')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
