<?php
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'], //both name and email are required
            ['email', 'email'], // email shoud be email format
        ];
    } // validate() runs the checks against rules specified above
}