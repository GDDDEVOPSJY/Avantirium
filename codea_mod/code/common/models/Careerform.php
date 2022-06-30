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
class Careerform extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $imageFile;

    public static function tableName() {
        return 'career_form';
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
            [['name'], 'required'],
            [['status','career_id'], 'integer'],
            [['email','phone','message','job_position'], 'string'],
            [['image'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Attachment'),
			'imageFile' => Yii::t('app', 'Attachment'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'message' => Yii::t('app', 'Message'),
			'job_position' => Yii::t('app', 'Job Position'),
            'status' => Yii::t('app', 'Status')
        ];
    }

    public function upload() {
        $basePath = Yii::$app->params['uploadPath'];
        if ($this->imageFile) {

            $filename = ($this->attachment) ?
                    $this->attachment : time() . "_" . preg_replace('/\s+/', '_', $this->imageFile->baseName) . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($basePath . 'careers/' . $filename, false);
            $this->attachment = $filename;
        }


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
