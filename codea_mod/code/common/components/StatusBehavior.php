<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;

use Yii;
use yii\base\Behavior;

class StatusBehavior extends Behavior
{

    public $statusAttribute = 'status';
    const STATUS_INACTIVE = 2;    
    const STATUS_ACTIVE = 1;  
    public $featuredAttribute = 'featured';
    const featured_INACTIVE = 0;    
    const featured_ACTIVE = 1;  	

    public function getStatusText()
    {
        $attribute = $this->statusAttribute;
        if ($this->owner->$attribute == self::STATUS_ACTIVE) {
            return '<span class="label label-success">' . Yii::t('app', 'Active') . '</span>';
        } else if ($this->owner->$attribute == self::STATUS_INACTIVE) {
            return '<span class="label label-danger">' . Yii::t('app', 'Inactive') . '</span>';
        } /*else if ($this->owner->$attribute == self::STATUS_PENDING) {
            return '<span class="label label-warning">' . Yii::t('app', 'Pending Approval') . '</span>';
        } else if ($this->owner->$attribute == self::STATUS_DRAFT) {
            return '<span class="label label-warning">' . Yii::t('app', 'Draft') . '</span>';
        }*/
    }
	public function getfeaturedText()
    {
        $attribute = $this->featuredAttribute;
        if ($this->owner->$attribute == self::featured_ACTIVE) {
            return '<span class="label label-success">' . Yii::t('app', 'Yes') . '</span>';
        } else if ($this->owner->$attribute == self::featured_INACTIVE) {
            return '<span class="label label-default">' . Yii::t('app', 'No') . '</span>';
        } /*else if ($this->owner->$attribute == self::STATUS_PENDING) {
            return '<span class="label label-warning">' . Yii::t('app', 'Pending Approval') . '</span>';
        } else if ($this->owner->$attribute == self::STATUS_DRAFT) {
            return '<span class="label label-warning">' . Yii::t('app', 'Draft') . '</span>';
        }*/
    }
    
     public static function getStatusOptions()
    {
        return [
            self::STATUS_INACTIVE => Yii::t('app','Inactive'),                    
            self::STATUS_ACTIVE => Yii::t('app','Active'),                                                    
        ];  
    }
    public static function getColorType()
    {
        return [
            'Small Sedan' => Yii::t('app','Small Sedan'),                    
            'Medium Sedan' => Yii::t('app','Medium Sedan'),                                                    
            'SUV' => Yii::t('app','SUV'),
            'Van' => Yii::t('app','Van'),
            'Pickup' => Yii::t('app','Pickup'),
            'Hatchback' => Yii::t('app','Hatchback'),
        ];
        
        /*return [
            'SUV' => Yii::t('app','SUV'),                    
            'Coupe' => Yii::t('app','Coupe'),                                                    
            'Hatchback' => Yii::t('app','Hatchback'),
            'Sedan' => Yii::t('app','Sedan'),
            'Crossover' => Yii::t('app','Crossover'),
        ];  */
    }
    
    public static function getCarLocation()
    {
        return [
            'Teyseer Rental & Leasing - Al Matar Street (Old Airport Road' => Yii::t('app','Teyseer Rental & Leasing - Al Matar Street (Old Airport Road')
        ];  
    }
    
    public static function getColor()
    {
        return [
            'Grey' => Yii::t('app','Grey'),                    
            'Black' => Yii::t('app','Black'),                                                    
            'Blue' => Yii::t('app','Blue'),
            'White' => Yii::t('app','White'),
            'Silver' => Yii::t('app','Silver'),
            'Red' => Yii::t('app','Red')
        ];        
    }
    
    public static function numberformat($val=null){
        if(!empty($val)){
            return substr(number_format((float)$val, 2, '.', ','), 0, strpos(number_format((float)$val, 2, '.', ','), ".")).'/-';
        }
        return '';
    }
    
    public static function getEnquirystatus()
    {
        return [
            'Open' => Yii::t('app','Open'),                    
            'Rented' => Yii::t('app','Rented'),                                                    
            'Closed' => Yii::t('app','Closed'),
            'Cancelled' => Yii::t('app','Cancelled')            
        ];        
    }
    public static function getRole()
    {
        //print_r(Yii::$app->user->identity->role); exit;
        
        if(isset(Yii::$app->user->identity->role) && Yii::$app->user->identity->role!='admin' ){
            return [                
                'user' => Yii::t('app','user'),
            ];    
        } else{
            return [
            'admin' => Yii::t('app','admin'),
          //  'subadmin' => Yii::t('app','subadmin'),
          //  'user' => Yii::t('app','user'),
        ];
        }
        
        
    }
}
