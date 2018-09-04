<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Fixture */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fixtures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fixture-view box box-primary">

    <div class="box-body">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'match_id',
                'team_id',
                'captain_id',
                'score',
                'wicket_lost',
                'result',
                'point',
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
