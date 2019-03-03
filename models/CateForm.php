<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class CateForm extends Model
{
    public $catename;
    public $tableName = 'cate';

    public function save()
    {

    }

    /**
     * @return array the validation rules.
     */
//    public function rules()
//    {
//        return [
//            // required
//            [['catename'], 'required', 'message' => 'have to input'],
//            [['catename'], 'string', 'message' => 'have to be string'],
//        ];
//    }

//    public function add()
//    {
//        echo 2;die;
//    }

}
