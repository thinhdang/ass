<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property string $loaisanpham
 * @property string $ten
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loaisanpham', 'ten'], 'required'],
            [['loaisanpham', 'ten'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loaisanpham' => 'Loaisanpham',
            'ten' => 'Ten',
        ];
    }
}
