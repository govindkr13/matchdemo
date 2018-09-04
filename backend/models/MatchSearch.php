<?php

/**
 * MatchSearch.php
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
use common\models\Match;

/**
 * MatchSearch represents the model behind the search form of `common\models\Match`.
 *
 * @category   backend
 * @package    backend\models
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 */

class MatchSearch extends Match
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tournament_id', 'date', 'result', 'type', 'created_at', 'updated_at'], 'integer'],
            [['location', 'first_field_umpire', 'second_field_umpire', 'tv_umpire', 'referee', 'best_player'], 'safe'],
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
        $query = Match::find();

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
            'tournament_id' => $this->tournament_id,
            'date' => $this->date,
            'result' => $this->result,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'first_field_umpire', $this->first_field_umpire])
            ->andFilterWhere(['like', 'second_field_umpire', $this->second_field_umpire])
            ->andFilterWhere(['like', 'tv_umpire', $this->tv_umpire])
            ->andFilterWhere(['like', 'referee', $this->referee])
            ->andFilterWhere(['like', 'best_player', $this->best_player]);

        return $dataProvider;
    }
}
