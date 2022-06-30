<?php

namespace common\models;
use common\components\StatusBehavior;
use Yii;

/**
 * This is the model class for table "Careers".
 *
 * @property integer $id
 * @property string $job_position
 * @property string $image
 * @property string $sub_title
 * @property string $date
 * @property integer $status
 */
class Careers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;
    public $image_multiple;
    public static function tableName()
    {
        return 'careers';
    }
    public function behaviors()
    {
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
            [['job_position', 'image', 'description', 'date'], 'required'],
            [['status','no_of_openings'], 'integer'],
            [['description','location'], 'string'],
            [['date'], 'safe'],
            [['job_position'], 'string', 'max' => 200],
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
            'job_position' => Yii::t('app', 'Job Position'),
            'image' => Yii::t('app', 'Image'),
            'description' => Yii::t('app', 'Description'),
            'location' => Yii::t('app', 'Location'),
            'date' => Yii::t('app', 'Model Year'),
			'no_of_openings' => Yii::t('app', 'No of openings'),
            'status' => Yii::t('app', 'Status')
        ];
    }
   /* public function getModels(){
        return $this->hasOne(Models::className(), ['id' => 'model']);
    }
    public function getMakes(){
        return $this->hasOne(Make::className(), ['id' => 'make']);
    }*/
    public function upload()
    {
        if ($this->imageFile) {
            $basePath=Yii::$app->params['uploadPath'];       
            $filename = time() . "_" . preg_replace('/\s+/', '-', $this->imageFile->baseName) . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($basePath.'careers/' . $filename);
            $this->image = $filename;
        }
        return TRUE;
    }
    public function beforeDelete()
    {
        $path = Yii::getAlias(Yii::$app->params['uploadPath']);
        
        if (parent::beforeDelete()) {
            if($this->image){
                if(file_exists($path.'careers/'.$this->image)){
                    unlink($path.'careers/'.$this->image);
                }                                             
            }                     
            return true;
        } else {
            return false;
        }
    }
}
