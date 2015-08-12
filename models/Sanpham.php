<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $sanpham
 * @property string $loaisanpham
 * @property string $ten
 * @property string $masp
 * @property string $mota
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanpham', 'loaisanpham', 'ten', 'masp', 'mota'], 'required'],
            [['sanpham'], 'integer'],
            [['loaisanpham', 'masp'], 'string', 'max' => 10],
            [['ten'], 'string', 'max' => 20],
            [['mota'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sanpham' => 'Sanpham',
            'loaisanpham' => 'Loaisanpham',
            'ten' => 'Ten',
            'masp' => 'Masp',
            'mota' => 'Mota',
        ];
    }
}
