<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Khanhhang;

/**
 * KhanhhangSearch represents the model behind the search form about `app\models\Khanhhang`.
 */
class KhanhhangSearch extends Khanhhang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['khachhang', 'phone'], 'integer'],
            [['ten', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Khanhhang::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'khachhang' => $this->khachhang,
            'phone' => $this->phone,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
