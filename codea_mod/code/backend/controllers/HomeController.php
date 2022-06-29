<?php

namespace backend\controllers;

use Yii;
use common\models\Home;
use common\models\HomeSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * NewsController implements the CRUD actions for News model.
 */
class HomeController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [                   
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
    public function beforeAction($action) {  
         
        $session = Yii::$app->session;
        $permissions = $session->get('permissions');
        //echo "<pre>11"; print_r($permissions); exit;        
        
        if (!$session->has('permissions')){ Yii::$app->user->logout(); $this->goHome(); return false; }       
        
        /*if(($action->id=='index' || $action->id=='view') && !in_array("user_view", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='create' && !in_array("user_add", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }*/
        if($action->id=='update' && !in_array("about_edit", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        /*if($action->id=='delete' && !in_array("user_delete", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }   */     
        return parent::beforeAction($action);
        
    }
    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HomeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->redirect(['update', 'id' => 1]);
        return $this->render('view', [
                'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        return $this->redirect(['update', 'id' => 1]);
        $model = new Home();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile3 = \yii\web\UploadedFile::getInstance($model, 'imageFile3');            
            $model->imageFile1 = \yii\web\UploadedFile::getInstance($model, 'imageFile1');  
            $model->imageFile2 = \yii\web\UploadedFile::getInstance($model, 'imageFile2');
            $model->imageFile4 = \yii\web\UploadedFile::getInstance($model, 'imageFile4');  
            $model->imageFile5 = \yii\web\UploadedFile::getInstance($model, 'imageFile5');  			
            if ($model->upload() && $model->save(FALSE)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

       // $departmentData = yii\helpers\ArrayHelper::map(\backend\models\Department::findAll(['status' => \common\components\StatusBehavior::STATUS_ACTIVE]), 'id', 'name');
        return $this->render('create', [
                'model' => $model,
               // 'departmentData' => $departmentData
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile3 = \yii\web\UploadedFile::getInstance($model, 'imageFile3');            
            $model->imageFile1 = \yii\web\UploadedFile::getInstance($model, 'imageFile1'); 
            $model->imageFile2= \yii\web\UploadedFile::getInstance($model, 'imageFile2');
            $model->imageFile4 = \yii\web\UploadedFile::getInstance($model, 'imageFile4');  
            $model->imageFile5 = \yii\web\UploadedFile::getInstance($model, 'imageFile5'); 			
            if ($model->upload() && $model->save(FALSE)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }        
        return $this->render('update', [
                'model' => $model                
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        return $this->redirect(['update', 'id' => 1]);
        $basePath1 = Yii::getAlias('@frontend') .'/web/uploads/home/';
       // if($this->banner!="" && file_exists($basePath1.$this->banner)){
         //   unlink($basePath1.$this->banner);
      //  }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Home::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
