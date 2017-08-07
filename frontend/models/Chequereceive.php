<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cheque_receive".
 *
 * @property integer $cheque_receive_id
 * @property string $cheque_receive_date
 * @property string $cheque_date
 * @property string $cheque_no
 */
class Chequereceive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cheque_receive';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cheque_receive_date', 'cheque_date', 'cheque_no'], 'required'],
            [['cheque_receive_date', 'cheque_date'], 'safe'],
            [['cheque_no'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cheque_receive_id' => 'Cheque Receive ID',
            'cheque_receive_date' => 'Cheque Receive Date',
            'cheque_date' => 'Cheque Date',
            'cheque_no' => 'Cheque No',
        ];
    }
}
