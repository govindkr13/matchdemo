<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FixtureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Fixtures');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fixture-index box box-primary">

    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'match_id',
                'team_id',
                'captain_id',
                'score',
                //'wicket_lost',
                //'result',
                //'point',
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
            <?= Html::a(Yii::t('app', 'Create Fixture'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

</div>
