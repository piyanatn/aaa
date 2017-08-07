<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookbank".
 *
 * @property integer $bookbank_id
 * @property integer $bank_id
 * @property string $bookbank_no
 * @property string $bookbank_type
 * @property string $bookbank_name
 */
class Bookbank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookbank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_id', 'bookbank_no', 'bookbank_type', 'bookbank_name'], 'required'],
            [['bank_id'], 'integer'],
            [['bookbank_no', 'bookbank_type'], 'string', 'max' => 20],
            [['bookbank_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookbank_id' => 'Bookbank ID',
            'bank_id' => 'Bank ID',
            'bookbank_no' => 'Bookbank No',
            'bookbank_type' => 'Bookbank Type',
            'bookbank_name' => 'Bookbank Name',
        ];
    }
}
