<?php

/**
 * Team.php
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
use yii\helpers\ArrayHelper;
use yii\behaviors\SluggableBehavior;
use Yii;

/**
 * This is the model class for table "team".
 *
 * @category   common
 * @package    common\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 *
 * @property int $id
 * @property string $name
 * @property string $club_state
 * @property string $slug
 * @property string $logo
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Fixture[] $fixtures
 * @property TeamSelection[] $teamSelections
 */

class Team extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'club_state', 'logo'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'club_state', 'slug', 'logo'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'club_state' => Yii::t('app', 'Club State'),
            'slug' => Yii::t('app', 'Slug'),
            'logo' => Yii::t('app', 'Logo'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFixtures()
    {
        return $this->hasMany(Fixture::class, ['team_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSelections()
    {
        return $this->hasMany(TeamSelection::class, ['team_id' => 'id']);
    }

    /**
     * Returns list of behaviors
     *
     * @return array
     */
    public function behaviors()
    {
        return ArrayHelper::merge([
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'name'
            ]
        ],
            parent::behaviors()
        );
    }

    /**
     * {@inheritdoc}
     * @return TeamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamQuery(get_called_class());
    }
}
