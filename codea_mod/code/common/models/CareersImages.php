<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news_events_image".
 *
 * @property integer $id
 * @property integer $usedcar_id
 * @property string $image
 * @property integer $sort
 */
class AccessoriesImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accessories_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accessories_id', 'image'], 'required'],
            [['accessories_id'], 'integer'],
            [['image'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'accessories_id' => Yii::t('app', 'Car Name'),
            'image' => Yii::t('app', 'Image'),            
        ];
    }
    
}
