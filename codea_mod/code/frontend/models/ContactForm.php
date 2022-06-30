<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $address;
    public $email;
    public $city;
    public $message;
	public $phone;
    public $zip;
    public $verifyCode;
    public $g_recaptcha_response;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'address', 'email', 'city', 'phone'], 'required'],
            [['message','zip'], 'string'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
       return [
           // 'verifyCode' => 'Verification Code',
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
			'Address' => 'Address',
			'zip' => 'Zip',
			'message' => 'Message',
			'city' => 'City, State',
			'phone' => 'Phone',
           // 'g_recaptcha_response'=>'Captcha'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    { 
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject('Contact form')
            ->setHtmlBody('<p> Name: '.$this->name.'<p> Phone: '.$this->phone.'<p> Address: '.$this->address.'<p> Email: '.$this->email.'<p> Zip: '.$this->zip.'<p> City, State: '.$this->city.'</p><p> Message: '.$this->message.'</p>')
           ->send();	            
    }
}
