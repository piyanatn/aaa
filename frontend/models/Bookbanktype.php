<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookbank_type".
 *
 * @property string $bookbank_type
 */
class Bookbanktype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookbank_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookbank_type'], 'required'],
            [['bookbank_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookbank_type' => 'Bookbank Type',
        ];
    }
}
