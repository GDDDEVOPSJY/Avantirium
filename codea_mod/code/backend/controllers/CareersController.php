<?php

namespace backend\controllers;

use Yii;
use common\models\Careers;
use common\models\CareersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * AccessoriesController implements the CRUD actions for Accessories model.
 */
class CareersController extends Controller
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
        if (!$session->has('permissions')){ Yii::$app->user->logout(); $this->goHome(); return false; }               
        if(($action->id=='index' || $action->id=='view') && !in_array("careers_view", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='create' && !in_array("careers_add", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='update' && !in_array("careers_edit", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='delete' && !in_array("careers_delete", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }   
        return parent::beforeAction($action);        
    }
    /**
     * Lists all Usedcars models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CareersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usedcars model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usedcars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {        
        $model = new Careers();

        if ($model->load(Yii::$app->request->post())) {            
            $model->imageFile = \yii\web\UploadedFile::getInstance($model, 'imageFile');
            $model->image_multiple = \yii\web\UploadedFile::getInstances($model, 'image_multiple');
           
            
            if ($model->upload() && $model->save(FALSE)) {
  
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
                'model' => $model,
            ]);
        
        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }*/
    }

    /**
     * Updates an existing Usedcars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
            
                
        if ($model->load(Yii::$app->request->post())) {
            
            $model->imageFile = \yii\web\UploadedFile::getInstance($model, 'imageFile');
            $model->image_multiple = \yii\web\UploadedFile::getInstances($model, 'image_multiple');  
            

                //print_r($model->date); exit;
                
            if ($model->upload() && $model->save(FALSE)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }        
        return $this->render('update', [
                'model' => $model                
        ]);
        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }*/
    }
    public function actionModel() {
    $out = [];
    /* (isset($_POST['depdrop_parents'])) {
        $parents = $_POST['depdrop_parents'];
        if ($parents != null) {
            $make_id = $parents[0];            
            $list = Models::find()->where(['status'=>1,'make_id'=>$make_id])->orderBy('title')->all();
            
            // cat_id and return an array like below:
            // [
            //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
            //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
            // ]
        $selected  = null;
        if ($make_id != null && count($list) > 0) {
            $selected = '';
            foreach ($list as $i => $account) {
                $out[] = ['id' => $account['id'], 'name' => $account['title']];
                if ($i == 0) {
                    $selected = isset($_GET['id'])?$_GET['id']:'';
                }
            }
            //echo json_encode(['output'=>$out, 'selected'=>'']);
            echo \yii\helpers\Json::encode(['output'=>$out, 'selected'=>$selected]);
            return;
        }
        }
    }*/
    echo Json::encode(['output'=>'', 'selected'=>'']);
}
    /**
     * Deletes an existing Usedcars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usedcars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usedcars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Careers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
  
}
