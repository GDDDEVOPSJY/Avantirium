<?php

namespace common\models;

use common\components\StatusBehavior;
use Yii;

/**
 * This is the model class for table "usedcars".
 *
 * @property integer $id
 * @property integer $make
 * @property integer $model
 * @property string $heading
 * @property string $image
 * @property string $description
 * @property integer $doors
 * @property integer $bluetooth
 * @property integer $passengers
 * @property integer $automatic
 * @property string $price
 * @property integer $km
 * @property string $date
 * @property integer $status
 */
class Businesspartnersform extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $imageFile;

    public static function tableName() {
        return 'businnessparters_form';
    }

    public function behaviors() {
        return [
            StatusBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name'], 'required'],
            [['status'], 'integer'],
            [['address','complement','city','zip','state','industry','website','full_name','partnership_category','position','phone_contact','mobile','skype','mobile','email','country','main_goal','focus','current_business','services','service_country','no_of_officers','email','no_of_officers','no_of_customers'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'company_name' => Yii::t('app', 'Company name'),
            'address' => Yii::t('app', 'Address'),
			'complement' => Yii::t('app', 'Complement'),
            'city' => Yii::t('app', 'City'),
            'zip' => Yii::t('app', 'Zip'),
            'state' => Yii::t('app', 'State'),
			'website' => Yii::t('app', 'Website'),
			'full_name' => Yii::t('app', 'Full name'),
			'position' => Yii::t('app', 'Position'),
            'phone_contact' => Yii::t('app', 'Phone contact'),
			'mobile' => Yii::t('app', 'Mobile'),
            'skype' => Yii::t('app', 'Skype'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
			'partnership_category' => Yii::t('app', 'Partnership Category'),
			'solution' => Yii::t('app', 'Solution'),
			'main_goal' => Yii::t('app', 'Main goal'),
            'current_business' => Yii::t('app', 'Current business'),
            'constitute' => Yii::t('app', 'Constitute'),
            'services' => Yii::t('app', 'Services'),
			'service_country' => Yii::t('app', 'Service country'),
			'no_of_officers' => Yii::t('app', 'No of officers'),
			'no_of_customers' => Yii::t('app', 'No of customers'),
            'focus' => Yii::t('app', 'Focus'),
            'status' => Yii::t('app', 'Status')
        ];
    }

    public function upload() {
        return TRUE;
    }

    public function beforeDelete() {
        $path = Yii::getAlias(Yii::$app->params['uploadPath']);

        if (parent::beforeDelete()) {
            return true;
        } else {
            return false;
        }
    }

}
