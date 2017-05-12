<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $role;
    public $username;
    public $email;
    public $password;
    public $first_name;
    public $middle_name;
    public $last_name;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['role', 'required'],
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 20],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 30],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['first_name', 'trim'],
            ['first_name', 'required'],
            ['middle_name', 'trim'],
            ['middle_name', 'required'],
            ['last_name', 'trim'],
            ['last_name', 'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->role = $this->role;
        $user->first_name = $this->first_name;
        $user->middle_name = $this->middle_name;
        $user->last_name = $this->last_name;
        
        return $user->save() ? $user : null;
    }
}
