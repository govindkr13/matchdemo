<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ScoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Scores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="score-index box box-primary">

    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'match_id',
                'player_id',
                'ball_played',
                'run_scored',
                //'batting_average',
                //'total_bowled',
                //'run_expenses',
                //'maiden',
                //'wicket_taken',
                //'balling_average',
                //'catch',
                //'stump',
                //'created_at',
                //'updated_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}{update}'
                ]
            ],
        ]); ?>
    </div>

    <div class="box-footer">
        <p>
            <?= Html::a(Yii::t('app', 'Create Score'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

</div>
