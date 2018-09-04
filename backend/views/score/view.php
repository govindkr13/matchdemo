<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Score */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Scores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="score-view box box-primary">

    <div class="box-body">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'match_id',
                'player_id',
                'ball_played',
                'run_scored',
                'batting_average',
                'total_bowled',
                'run_expenses',
                'maiden',
                'wicket_taken',
                'balling_average',
                'catch',
                'stump',
                'created_at',
                'updated_at',
            ],
        ]) ?>
    </div>

    <div class="box-footer">
        <p>
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        </p>
    </div>

</div>
