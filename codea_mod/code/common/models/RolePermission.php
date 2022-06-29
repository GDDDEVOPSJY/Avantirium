<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "role_permission".
 *
 * @property integer $id
 * @property string $role_id
 * @property string $permissions
 */
class RolePermission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role_permission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'permissions'], 'required'],
            [['role_id'], 'string', 'max' => 20],
            [['permissions'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_id' => 'Role ID',
            'permissions' => 'Permissions',
        ];
    }
}
