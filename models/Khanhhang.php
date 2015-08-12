<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khanhhang".
 *
 * @property integer $khachhang
 * @property string $ten
 * @property string $email
 * @property integer $phone
 */
class Khanhhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khanhhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['khachhang', 'ten', 'email', 'phone'], 'required'],
            [['khachhang', 'phone'], 'integer'],
            [['ten', 'email'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'khachhang' => 'Khachhang',
            'ten' => 'Ten',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }
}
