<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chitiethoadon;

/**
 * ChitiethoadonSearch represents the model behind the search form about `app\models\Chitiethoadon`.
 */
class ChitiethoadonSearch extends Chitiethoadon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chitiethoadon', 'sanpham', 'hoadon', 'soluongmua', 'baohanh'], 'integer'],
            [['khuyenmai'], 'safe'],
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
        $query = Chitiethoadon::find();

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
            'chitiethoadon' => $this->chitiethoadon,
            'sanpham' => $this->sanpham,
            'hoadon' => $this->hoadon,
            'soluongmua' => $this->soluongmua,
            'baohanh' => $this->baohanh,
        ]);

        $query->andFilterWhere(['like', 'khuyenmai', $this->khuyenmai]);

        return $dataProvider;
    }
}
