<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hoadon;

/**
 * HoadonSearch represents the model behind the search form about `app\models\Hoadon`.
 */
class HoadonSearch extends Hoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoadon'], 'integer'],
            [['khanhhang', 'ngaymua'], 'safe'],
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
        $query = Hoadon::find();

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
            'hoadon' => $this->hoadon,
            'ngaymua' => $this->ngaymua,
        ]);

        $query->andFilterWhere(['like', 'khanhhang', $this->khanhhang]);

        return $dataProvider;
    }
}
