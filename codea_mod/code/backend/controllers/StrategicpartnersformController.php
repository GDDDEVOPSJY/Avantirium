<?php
namespace backend\controllers;
use Yii;
use common\models\Strategicpartnersform;
use common\models\StrategicpartnersformSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * QualificationformController implements the CRUD actions for Qualification model.
 */
class StrategicpartnersformController extends Controller
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
        if(($action->id=='index' || $action->id=='view') && !in_array("strategic_partnersform_view", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='create' && !in_array("strategic_partnersform_add", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='update' && !in_array("strategic_partnersform_edit", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }
        if($action->id=='delete' && !in_array("strategic_partnersform_delete", $permissions)){
            throw new \yii\web\ForbiddenHttpException('You have no permission to access this section');
        }   
        return parent::beforeAction($action);        
    }
    /**
     * Lists all OurfleetEquiry models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StrategicpartnersformSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OurfleetEquiry model.
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
     * Creates a new OurfleetEquiry model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Strategicpartnersform();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OurfleetEquiry model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        //return $this->redirect(['index']);
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OurfleetEquiry model.
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
     * Finds the OurfleetEquiry model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OurfleetEquiry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Strategicpartnersform::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
