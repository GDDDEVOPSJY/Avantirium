<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    
    public $name;
    public $primary_phone;
    public $secondary_phone;
    public $passport;
    public $address;    
    public $confirm_password;
    public $status;
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //['username', 'trim'],
            //['username', 'required'],
            //['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            //['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            [['name','primary_phone','secondary_phone','passport','address','status'], 'safe'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['confirm_password', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
        ];
    }
    public function isNewRecord()
    {
        return $this->isNewRecord;
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
        $user->username = $this->email;
        $user->email = $this->email;
        
        $user->name = $this->name;
        $user->primary_phone = $this->primary_phone;
        $user->secondary_phone = $this->secondary_phone;
        $user->passport = $this->passport;
        $user->address = $this->address;       
        
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
