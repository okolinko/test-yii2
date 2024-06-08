<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class UserGridSearch extends User
{
    /**
     * The validation rules.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            [['id', 'joined' ], 'integer' ],
            [['first_name', 'last_name', 'email', 'phone'], 'safe' ],
        ];
    }

    /**
     * @return array
     */
    public function scenarios() : array
    {
        return Model::scenarios();
    }

    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params) : ActiveDataProvider
    {
        $query = self::find();

        $this->load($params);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            ]);
        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}