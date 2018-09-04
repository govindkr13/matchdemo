<?php

/**
 * Fixture.php
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

use common\components\ActiveRecord;
use Yii;

/**
 * This is the model class for table "fixture".
 *
 * @category   common
 * @package    common\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 *
 * @property int $id
 * @property int $match_id
 * @property int $team_id
 * @property int $captain_id
 * @property int $score
 * @property int $wicket_lost
 * @property int $result 0 Not Decided, 1 Winner, 2 Looser, 3 Drawn
 * @property int $point
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Match $match
 * @property Player $captain
 * @property Team $team
 */
class Fixture extends ActiveRecord
{

    const RESULT_NOT_DECIDED = 0;

    const RESULT_WINNER = 1;

    const RESULT_LOOSER = 2;

    const RESULT_DRAWN = 3;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fixture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['match_id', 'team_id', 'captain_id'], 'required'],
            [['match_id', 'team_id', 'captain_id', 'score', 'wicket_lost', 'result', 'point', 'created_at', 'updated_at'], 'integer'],
            [['match_id'], 'exist', 'skipOnError' => true, 'targetClass' => Match::class, 'targetAttribute' => ['match_id' => 'id']],
            [['captain_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::class, 'targetAttribute' => ['captain_id' => 'id']],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::class, 'targetAttribute' => ['team_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'match_id' => Yii::t('app', 'Match ID'),
            'team_id' => Yii::t('app', 'Team ID'),
            'captain_id' => Yii::t('app', 'Captain ID'),
            'score' => Yii::t('app', 'Score'),
            'wicket_lost' => Yii::t('app', 'Wicket Lost'),
            'result' => Yii::t('app', '0 Not Decided, 1 Winner, 2 Looser, 3 Drawn'),
            'point' => Yii::t('app', 'Point'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatch()
    {
        return $this->hasOne(Match::class, ['id' => 'match_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaptain()
    {
        return $this->hasOne(Player::class, ['id' => 'captain_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::class, ['id' => 'team_id']);
    }

    /**
     * {@inheritdoc}
     * @return FixtureQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FixtureQuery(get_called_class());
    }
}
