<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeamSelectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Team Selections');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-selection-index box box-primary">

    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'tournament_id',
                'team_id',
                'player_id',
                'is_available',
                //'unavailability_reason:ntext',
                //'selected_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}{update}'
                ]
            ],
        ]); ?>
    </div>

    <div class="box-footer">
        <p>
            <?= Html::a(Yii::t('app', 'Create Team Selection'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

</div>
