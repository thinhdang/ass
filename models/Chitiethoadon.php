<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property integer $chitiethoadon
 * @property integer $sanpham
 * @property integer $hoadon
 * @property integer $soluongmua
 * @property string $khuyenmai
 * @property integer $baohanh
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chitiethoadon', 'sanpham', 'hoadon', 'soluongmua', 'khuyenmai', 'baohanh'], 'required'],
            [['chitiethoadon', 'sanpham', 'hoadon', 'soluongmua', 'baohanh'], 'integer'],
            [['khuyenmai'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chitiethoadon' => 'Chitiethoadon',
            'sanpham' => 'Sanpham',
            'hoadon' => 'Hoadon',
            'soluongmua' => 'Soluongmua',
            'khuyenmai' => 'Khuyenmai',
            'baohanh' => 'Baohanh',
        ];
    }
}
