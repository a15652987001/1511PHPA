<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property integer $id
 * @property string $login_name
 * @property string $login_pwd
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login_name', 'login_pwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login_name' => 'Login Name',
            'login_pwd' => 'Login Pwd',
        ];
    }
}
