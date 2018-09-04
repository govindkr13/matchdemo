<?php

/**
 * TeamSelection.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   common
 * @package    common\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

namespace common\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "team_selection".
 *
 * @category   common
 * @package    common\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $team_id
 * @property int $player_id
 * @property int $is_available
 * @property string $unavailability_reason
 * @property int $selected_at
 *
 * @property Player $player
 * @property Team $team
 * @property Tournament $tournament
 */

class TeamSelection extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team_selection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tournament_id', 'team_id', 'player_id', 'selected_at'], 'required'],
            [['tournament_id', 'team_id', 'player_id', 'is_available', 'selected_at'], 'integer'],
            [['unavailability_reason'], 'string'],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::class, 'targetAttribute' => ['player_id' => 'id']],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::class, 'targetAttribute' => ['team_id' => 'id']],
            [['tournament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tournament::class, 'targetAttribute' => ['tournament_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tournament_id' => Yii::t('app', 'Tournament ID'),
            'team_id' => Yii::t('app', 'Team ID'),
            'player_id' => Yii::t('app', 'Player ID'),
            'is_available' => Yii::t('app', 'Is Available'),
            'unavailability_reason' => Yii::t('app', 'Unavailability Reason'),
            'selected_at' => Yii::t('app', 'Selected At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::class, ['id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::class, ['id' => 'team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
        return $this->hasOne(Tournament::class, ['id' => 'tournament_id']);
    }

    /**
     * {@inheritdoc}
     * @return TeamSelectionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamSelectionQuery(get_called_class());
    }
}
