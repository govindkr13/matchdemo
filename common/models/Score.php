<?php

/**
 * Score.php
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
 * This is the model class for table "score".
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
 * @property int $player_id
 * @property int $ball_played
 * @property int $run_scored
 * @property string $batting_average
 * @property int $total_bowled
 * @property int $run_expenses
 * @property int $maiden
 * @property int $wicket_taken
 * @property string $balling_average
 * @property int $catch
 * @property int $stump
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Match $match
 * @property Player $player
 */

class Score extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'score';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['match_id', 'player_id'], 'required'],
            [['match_id', 'player_id', 'ball_played', 'run_scored', 'total_bowled', 'run_expenses', 'maiden', 'wicket_taken', 'catch', 'stump', 'created_at', 'updated_at'], 'integer'],
            [['batting_average', 'balling_average'], 'number'],
            [['match_id'], 'exist', 'skipOnError' => true, 'targetClass' => Match::class, 'targetAttribute' => ['match_id' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::class, 'targetAttribute' => ['player_id' => 'id']],
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
            'player_id' => Yii::t('app', 'Player ID'),
            'ball_played' => Yii::t('app', 'Ball Played'),
            'run_scored' => Yii::t('app', 'Run Scored'),
            'batting_average' => Yii::t('app', 'Batting Average'),
            'total_bowled' => Yii::t('app', 'Total Bowled'),
            'run_expenses' => Yii::t('app', 'Run Expenses'),
            'maiden' => Yii::t('app', 'Maiden'),
            'wicket_taken' => Yii::t('app', 'Wicket Taken'),
            'balling_average' => Yii::t('app', 'Balling Average'),
            'catch' => Yii::t('app', 'Catch'),
            'stump' => Yii::t('app', 'Stump'),
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
    public function getPlayer()
    {
        return $this->hasOne(Player::class, ['id' => 'player_id']);
    }

    /**
     * {@inheritdoc}
     * @return ScoreQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ScoreQuery(get_called_class());
    }
}
