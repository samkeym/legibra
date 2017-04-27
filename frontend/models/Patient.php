<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $date_of_birth
 * @property string $email
 * @property string $phone_number
 * @property string $nationality
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'first_name', 'last_name', 'gender', 'date_of_birth', 'email', 'phone_number', 'nationality'], 'required'],
            [['title', 'first_name', 'last_name', 'gender', 'date_of_birth', 'email', 'phone_number', 'nationality'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'nationality' => 'Nationality',
        ];
    }
}
