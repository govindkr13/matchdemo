<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Teams');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index box box-primary">

    <div class="box-body">
        <?php if (!empty($teams)) :?>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Team Name</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($teams as $team): ?>
                    <tr>
                        <td><?=$team->id?></td>
                        <td><?=$team->name?></td>
                        <td><?= Html::a('View', ['team/players', ['teamId' => $team->id]])?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif;?>


    </div>
</div>
