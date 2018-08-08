<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $Name
 * @property string $Address
 * @property string $Type
 * @property string $Email
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Type', 'Email'], 'required'],
            [['Address'], 'string'],
			        ['Email', 'email'],

            [['Name', 'Type', 'Email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Address' => 'Address',
            'Type' => 'Type',
            'Email' => 'Email',
        ];
    }
}
