<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Matches');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-index box box-primary">

    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'tournament_id',
                'location',
                'date',
                'result',
                //'type',
                //'first_field_umpire',
                //'second_field_umpire',
                //'tv_umpire',
                //'referee',
                //'best_player',
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
            <?= Html::a(Yii::t('app', 'Create Match'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

</div>
