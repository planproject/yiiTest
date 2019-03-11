<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CateForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'alexa_cate';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // required
            [['catename', 'status'], 'required', 'message' => 'have to input'],
            [['catename'], 'string', 'message' => 'have to be string'],
        ];
    }


}
