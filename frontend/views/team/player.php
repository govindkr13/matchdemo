<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Players');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index box box-primary">

    <div class="box-body">
        <?php if (!empty($players)) :?>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Jersey Number</th>
                </tr>
                <?php foreach ($players as $player): ?>
                    <tr>
                        <td><?=$player->id?></td>
                        <td><?=$player->firstName . '' . $player->lastName?></td>
                        <td><?=$player->jerseyNumber?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif;?>


    </div>
</div>
