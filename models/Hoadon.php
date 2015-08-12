<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $hoadon
 * @property string $khanhhang
 * @property string $ngaymua
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoadon', 'khanhhang', 'ngaymua'], 'required'],
            [['hoadon'], 'integer'],
            [['ngaymua'], 'safe'],
            [['khanhhang'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hoadon' => 'Hoadon',
            'khanhhang' => 'Khanhhang',
            'ngaymua' => 'Ngaymua',
        ];
    }
}
