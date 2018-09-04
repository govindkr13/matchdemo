<?php

/**
 * Player.php
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
 * This is the model class for table "player".
 *
 * @category   common
 * @package    common\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 *
 * @property int $id
 * @property int $country_id
 * @property string $first_name
 * @property string $last_name
 * @property int $role 1 Batsman, 2 Baller, 3 All Rounder, 4 Wicketkeeper
 * @property int $jersey_number
 * @property int $status
 * @property int $debut_at
 * @property int $retire_at
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Fixture[] $fixtures
 * @property Country $country
 * @property Score[] $scores
 * @property TeamSelection[] $teamSelections
 */

class Player extends ActiveRecord
{

    const ROLE_BATSMAN = 1;

    const ROLE_BALLER = 2;

    const ROLE_ALL_ROUNDER = 3;

    const ROLE_WICKETKEEPER = 4;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'player';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id', 'first_name', 'last_name', 'role', 'jersey_number'], 'required'],
            [['country_id', 'role', 'jersey_number', 'status', 'debut_at', 'retire_at', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 32],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::class, 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'role' => Yii::t('app', '1 Batsman, 2 Baller, 3 All Rounder, 4 Wicketkeeper'),
            'jersey_number' => Yii::t('app', 'Jersey Number'),
            'status' => Yii::t('app', 'Status'),
            'debut_at' => Yii::t('app', 'Debut At'),
            'retire_at' => Yii::t('app', 'Retire At'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixture::class, ['captain_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::class, ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScores()
    {
        return $this->hasMany(Score::class, ['player_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSelections()
    {
        return $this->hasMany(TeamSelection::class, ['player_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PlayerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlayerQuery(get_called_class());
    }
}
