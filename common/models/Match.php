<?php

/**
 * Match.php
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
 * This is the model class for table "match".
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
 * @property string $location
 * @property int $date
 * @property int $result 0 Not started, 1 In Progress, 2 Drawn, 3 Abandon, 4 Result Decided
 * @property int $type 1 Test, 2 One Day, 3 Twenty Twenty
 * @property string $first_field_umpire
 * @property string $second_field_umpire
 * @property string $tv_umpire
 * @property string $referee
 * @property string $best_player
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Fixture[] $fixtures
 * @property Tournament $tournament
 * @property Score[] $scores
 */

class Match extends ActiveRecord
{

    const RESULT_NOT_STARTED = 0;

    const RESULT_IN_PROGRESS = 1;

    const RESULT_DRAWN = 2;

    const RESULT_ABANDON = 3;

    const RESULT_RESULT_DECIDED = 4;

    const TYPE_TEST = 1;

    const TYPE_ONE_DAY = 2;

    const TYPE_TWENTY_TWENTY = 3;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'match';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tournament_id', 'location', 'date', 'type'], 'required'],
            [['tournament_id', 'date', 'result', 'type', 'created_at', 'updated_at'], 'integer'],
            [['location', 'first_field_umpire', 'second_field_umpire', 'tv_umpire', 'referee', 'best_player'], 'string', 'max' => 64],
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
            'location' => Yii::t('app', 'Location'),
            'date' => Yii::t('app', 'Date'),
            'result' => Yii::t('app', '0 Not started, 1 In Progress, 2 Drawn, 3 Abandon, 4 Result Decided'),
            'type' => Yii::t('app', '1 Test, 2 One Day, 3 Twenty Twenty'),
            'first_field_umpire' => Yii::t('app', 'First Field Umpire'),
            'second_field_umpire' => Yii::t('app', 'Second Field Umpire'),
            'tv_umpire' => Yii::t('app', 'Tv Umpire'),
            'referee' => Yii::t('app', 'Referee'),
            'best_player' => Yii::t('app', 'Best Player'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixture::class, ['match_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
        return $this->hasOne(Tournament::class, ['id' => 'tournament_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScores()
    {
        return $this->hasMany(Score::class, ['match_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return MatchQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MatchQuery(get_called_class());
    }
}
