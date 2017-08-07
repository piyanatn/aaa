<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payer_office".
 *
 * @property integer $payer_office_id
 * @property string $payer_office)name
 */
class Payeroffice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payer_office';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payer_office)name'], 'required'],
            [['payer_office)name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'payer_office_id' => 'Payer Office ID',
            'payer_office)name' => 'Payer Office)name',
        ];
    }
}
