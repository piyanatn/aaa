<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property integer $bank_id
 * @property string $bank_code
 * @property string $bank_name
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_code', 'bank_name'], 'required'],
            [['bank_code'], 'string', 'max' => 10],
            [['bank_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bank_id' => 'Bank ID',
            'bank_code' => 'Bank Code',
            'bank_name' => 'Bank Name',
        ];
    }
}
