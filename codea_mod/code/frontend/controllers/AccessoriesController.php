<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Accessories;
use common\models\AccessoriesImages;
use yii\helpers\ArrayHelper;
use common\models\Models;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;
use common\components\StatusBehavior;
/**
 * Site controller
 */
class AccessoriesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        $model = Accessories::find()->where(['status'=>1])->orderBy('id')->all();  
 //print_r($model);exit;
        return $this->render('index',[
                'model' => $model,
        ]);
    }
    
    public function actionSearch() {
        if (!Yii::$app->request->isAjax) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $model = Style::find()->where(['status'=>1])->orderBy('id');                
        $request=Yii::$app->request->queryParams;                
        //echo "<pre>"; print_r($request); exit;          
        
        if(isset($request['keyword']) && !empty($request['keyword'])){                
            $model->andFilterWhere(['like', 'heading', $request['keyword']]);
        }
       /* if(isset($request['usedcars_make']) && !empty($request['usedcars_make'])){                
            $model->andWhere(['make'=>$request['usedcars_make']]);
        }
        if(isset($request['usedcars_model']) && !empty($request['usedcars_model'])){                
            $model->andWhere(['model'=>$request['usedcars_model']]);
        }
        if(isset($request['minyear']) && !empty($request['minyear'])){            
            //date('Y-m-d',strtotime($date));            
            $model->andFilterWhere(['>=', 'date', $request['minyear'].'-01-01']);
        }
        if(isset($request['maxyear']) && !empty($request['maxyear'])){                
            $model->andFilterWhere(['<=', 'date', $request['maxyear'].'-12-31']);                                        
        }
        if(isset($request['price_from']) && !empty($request['price_from'])){                
            $model->andFilterWhere(['>=', 'price', $request['price_from']]);                                        
        }
        if(isset($request['price_to']) && !empty($request['price_to'])){                
            $model->andFilterWhere(['<=', 'price', $request['price_to']]);                                        
        }
        if(isset($request['km_from']) && !empty($request['km_from'])){                
            $model->andFilterWhere(['>=', 'km', $request['km_from']]);                                        
        }
        if(isset($request['km_to']) && !empty($request['km_to'])){                
            $model->andFilterWhere(['<=', 'km', $request['km_to']]);                                        
        }    
        if(isset($request['bluetooth']) && !empty($request['bluetooth'])){                
            $model->andWhere(['bluetooth'=>$request['bluetooth']]);
        }
         if(isset($request['usedcars_type']) && !empty($request['usedcars_type'])){                
            $model->andWhere(['type'=>$request['usedcars_type']]);
        }*/
         
        $count=$model->count();        
        $model->limit(9);
        if(isset($request['page']) && !empty($request['page'])){                
            $model->offset($request['page']);
        } else{
            $model->offset(0);
        }
        $rows=$model->all();
        $out='';
        if(!empty($rows)){ foreach($rows as $row){                
                $out['results'][] = [
                        'id' => $row->id,
                        'heading' => $row->heading,
                        'image' => (!empty($row->image))? Yii::$app->params['frontEndBaseUrl'].'mthumb.php?src='.Yii::$app->params['frontEndBaseUrl'].'uploads/usedcars/'.$row->image.'&w=239&h=150':Yii::$app->params['frontEndBaseUrl'].'mthumb.php?src='.Yii::$app->homeUrl.'images/car_no_image_small.jpg&w=239&h=150',
                        'price'=>StatusBehavior::numberformat($row->price),
                        'doors'=>$row->doors,
                        'bluetooth'=>($row->bluetooth=='1')?'Bluetooth':'N/A',
                        'automatic'=>($row->automatic=='1')?'Automatic':'Manual',                    
                        'passengers'=>$row->passengers,                                        
                        'km'=>$row->km,   
                        'date'=>date('Y',strtotime($row->date)),
                        'color'=>$row->color, 
                        'detailurl'=>Url::to(['/usedcar/view/','id'=>$row->id])
                 ];
        } }             
        echo json_encode($out); exit;       
    }
}
