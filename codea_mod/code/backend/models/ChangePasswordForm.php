<?php
namespace backend\models;

use backend\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class ChangePasswordForm extends Model
{
    public $oldpass;
    public $newpass;
    public $repeatnewpass;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oldpass','newpass','repeatnewpass'],'required'],
            ['oldpass','validatePassword'],
            ['repeatnewpass','compare','compareAttribute'=>'newpass'],
        ];
    }
    
    
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $id = Yii::$app->user->getId();
            $user = User::findOne(['id'=>$id]);
            if (!$user || !$user->validatePassword($this->oldpass)) {
                $this->addError($attribute, 'Old password is incorrect.');
            }
        }
    }
    
    public function changePassword()
    {
        if ($this->validate()) {
            $id = Yii::$app->user->getId();
            $user = User::findOne(['id'=>$id]);
            
            $user->setPassword($this->newpass);
            $user->save(false);
            return $user;
        }

        return null;
    }

    
    public function attributeLabels(){
        return [
            'oldpass'=>'Old Password',
            'newpass'=>'New Password',
            'repeatnewpass'=>'Repeat New Password',
        ];
    }
}
