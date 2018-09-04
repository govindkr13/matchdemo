<?php

/**
 * ScoreSearch.php
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   backend
 * @package    backend\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Score;

/**
 * ScoreSearch represents the model behind the search form of `common\models\Score`.
 *
 * @category   backend
 * @package    backend\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class ScoreSearch extends Score
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'match_id', 'player_id', 'ball_played', 'run_scored', 'total_bowled', 'run_expenses', 'maiden', 'wicket_taken', 'catch', 'stump', 'created_at', 'updated_at'], 'integer'],
            [['batting_average', 'balling_average'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Score::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'match_id' => $this->match_id,
            'player_id' => $this->player_id,
            'ball_played' => $this->ball_played,
            'run_scored' => $this->run_scored,
            'batting_average' => $this->batting_average,
            'total_bowled' => $this->total_bowled,
            'run_expenses' => $this->run_expenses,
            'maiden' => $this->maiden,
            'wicket_taken' => $this->wicket_taken,
            'balling_average' => $this->balling_average,
            'catch' => $this->catch,
            'stump' => $this->stump,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
