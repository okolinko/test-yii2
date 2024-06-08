<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DemoCustomer;

class DemoCustomerGrid extends DemoCustomer
{
    /**
     * The validation rules.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            [[ 'id', 'joined' ], 'integer' ],
            [[ 'first_name', 'last_name', 'middle_name', 'email', 'phone', 'document' ], 'safe' ],
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
        $query = DemoCustomer::find();
        $this->load($params);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            ]);

        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'document', $this->document]);

        return $dataProvider;
    }
}