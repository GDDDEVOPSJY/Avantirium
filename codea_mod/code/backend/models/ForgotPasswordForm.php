<?php
namespace backend\models;

use common\models\User;
use yii\base\Model;
use Yii;
use common\models\EmailTemplate;
use backend\components\StatusBehavior;

/**
 * Signup form
 */
class ForgotPasswordForm extends Model
{
    public $email;
    
    private $user;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'],'required'],
            ['email','checkEmail'],
            ['email','email'],           
        ];
    }
    
    public function checkEmail($attribute, $param)
    {
        //$user = User::find()->where(['email'=>$this->$attribute,'role_id'=>User::ROLE_SUPERADMIN,'status'=>StatusBehavior::STATUS_ACTIVE])->one();
        $user = User::find()->where(['email'=>$this->$attribute,'status'=>StatusBehavior::STATUS_ACTIVE])->one();
        if(!$user){
            $this->addError($attribute,Yii::t('app','Please enter a valid email address'));
        }else{
            $this->user = $user;
        }
        
    }
    public function sendMail()
    {
        if (!$this->user) {
            return false;
        }
        $email = $this->user->email;

        $user_name = $this->user->userProfile ? $this->user->userProfile->first_name." ".$this->user->userProfile->last_name : '';

        //generating password reset token
        if (!User::isPasswordResetTokenValid($this->user->password_reset_token)) {
             $this->user->generatePasswordResetToken();
         }

         if (!$this->user->save()) {
             return false;
         }
         
         $site_name=Yii::$app->params['siteName'];
         $site_email=Yii::$app->params['adminEmail'];
         
          
        return \Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $this->user])
            ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Password reset for ' . \Yii::$app->name)
           ->send();
            
            
         /*$message = EmailTemplate::format_mail('user_forgot_password', array(
             'user_name' => $user_name,
             'site_name' => $site_name,
             'user_login_onetime' => \yii\helpers\Url::to(['site/reset-password','token'=>$this->user->password_reset_token],true),
         ));

         $mail = Yii::$app->mailer->compose();

         $mail->setTo($email)
                 ->setFrom([$site_email => $site_name])
                 ->setSubject($message['subject'])
                 //->setTextBody($message['body']['text'])
                 ->setHtmlBody($message['body']['html'])
                 ->send();   */    

        return true;
    }
    
    public function attributeLabels(){
        return [
            'email'=>Yii::t('app','Email Address'),
        ];
    }
}
