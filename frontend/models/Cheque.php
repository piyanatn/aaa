<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cheque".
 *
 * @property integer $cheque_no
 * @property integer $bank_id
 * @property string $branch
 * @property string $cheque_type
 * @property integer $amount
 * @property string $payer
 * @property integer $book_id
 * @property string $deposit_date
 * @property string $clearing_date
 * @property integer $fee
 * @property integer $status
 * @property string $remark
 */
class Cheque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cheque';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cheque_no', 'bank_id', 'branch', 'cheque_type', 'amount', 'payer'], 'required'],
            [['cheque_no', 'bank_id', 'amount', 'book_id', 'fee', 'status'], 'integer'],
            [['deposit_date', 'clearing_date'], 'safe'],
            [['branch', 'remark'], 'string', 'max' => 50],
            [['cheque_type'], 'string', 'max' => 20],
            [['payer'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cheque_no' => 'Cheque No',
            'bank_id' => 'Bank ID',
            'branch' => 'Branch',
            'cheque_type' => 'Cheque Type',
            'amount' => 'Amount',
            'payer' => 'Payer',
            'book_id' => 'Book ID',
            'deposit_date' => 'Deposit Date',
            'clearing_date' => 'Clearing Date',
            'fee' => 'Fee',
            'status' => 'Status',
            'remark' => 'Remark',
        ];
    }
}
