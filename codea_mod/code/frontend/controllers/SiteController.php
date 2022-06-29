<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Aboutus;
use common\models\Home;
use common\models\Contactus;
use common\models\Privacy;
use common\models\Terms;
use common\models\Leed;
use common\models\Style;
use common\models\Material;
use common\models\Series;
use common\models\Accessories;
use common\models\Hardware;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {   
	    $model = Home::find()->orderBy('id')->one();
        return $this->render('index', [
		              'model' => $model,
            ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        
        
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionSearch()
    {
        //echo "<pre>"; print_r(Yii::$app->request->get()); exit;
        $request=Yii::$app->request->get();
        $rows='';
        if(isset($request['q']) && !empty($request['q'])){
            $model = Style::find()->orderBy('id');                                
            $model->orFilterWhere(['like', 'name', $request['q']]);
            $model->orFilterWhere(['like', 'description', $request['q']]);
            $model->andFilterWhere(['=', 'status', 1]);
            $count=$model->count();        
            $model->limit(10);
            if(isset($request['page']) && !empty($request['page'])){                
                $model->offset($request['page']);
            } else{
                $model->offset(0);
            }
            $rows=$model->all();   
        }
       
        $rows1='';        
        if(isset($request['q']) && !empty($request['q'])){                
            $model1 = Material::find()->orderBy('id');
            $model1->orFilterWhere(['like', 'name', $request['q']]);
			$model->orFilterWhere(['like', 'description', $request['q']]);
            $model1->andFilterWhere(['=', 'status', 1]);
            $count1=$model1->count();        
            $model1->limit(10);
            if(isset($request['page']) && !empty($request['page'])){                
                $model1->offset($request['page']);
            } else{
                $model->offset(0);
            }
            $rows1=$model1->all();
        } 
		$rows_series='';        
        if(isset($request['q']) && !empty($request['q'])){                
            $model1 = Series::find()->orderBy('id');
            $model1->orFilterWhere(['like', 'name', $request['q']]);
			$model->orFilterWhere(['like', 'description', $request['q']]);
            $model1->andFilterWhere(['=', 'status', 1]);
            $count1=$model1->count();        
            $model1->limit(10);
            if(isset($request['page']) && !empty($request['page'])){                
                $model1->offset($request['page']);
            } else{
                $model->offset(0);
            }
            $rows_series=$model1->all();
        } 
		$rows_accessories='';        
        if(isset($request['q']) && !empty($request['q'])){                
            $model1 = Accessories::find()->orderBy('id');
            $model1->orFilterWhere(['like', 'name', $request['q']]);
			$model->orFilterWhere(['like', 'description', $request['q']]);
            $model1->andFilterWhere(['=', 'status', 1]);
            $count1=$model1->count();        
            $model1->limit(10);
            if(isset($request['page']) && !empty($request['page'])){                
                $model1->offset($request['page']);
            } else{
                $model->offset(0);
            }
            $rows_accessories=$model1->all();
        } 
		$rows_hardware='';        
        if(isset($request['q']) && !empty($request['q'])){                
            $model1 = Hardware::find()->orderBy('id');
            $model1->orFilterWhere(['like', 'name', $request['q']]);
			$model->orFilterWhere(['like', 'description', $request['q']]);
            $model1->andFilterWhere(['=', 'status', 1]);
            $count1=$model1->count();        
            $model1->limit(10);
            if(isset($request['page']) && !empty($request['page'])){                
                $model1->offset($request['page']);
            } else{
                $model->offset(0);
            }
            $rows_hardware=$model1->all();
        } 
        //echo "<pre>"; print_r($rows);               
        //echo "<pre>"; print_r($rows_series); exit;              
        
        return $this->render('search', [
                'results'=>$rows,
                'results1'=>$rows1,
				'results_series'=>$rows_series,
                'results_accessories'=>$rows_accessories,
				'results_hardware'=>$rows_hardware,			
            ]);
    }
    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        
        $model = new ContactForm();
        if(isset(Yii::$app->request->isPost)){
           // $model->g_recaptcha_response=Yii::$app->request->post('g-recaptcha-response');
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
            //echo "<pre>"; print_r(Yii::$app->request->post()); 
            
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }
            return $this->refresh();
            
        } else {
            $contact = Contactus::find()->orderBy('id')->one();
            return $this->render('contact', [
                'model' => $model,
                'contact'=>  $contact
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $model = Aboutus::find()->orderBy('id')->one();
        return $this->render('about',[
              'model' => $model,
        ]);
    }
	 public function actionPartitions()
    {
       $model = Aboutus::find()->orderBy('id')->one();
        return $this->render('partitions',[
              'model' => $model,
        ]);
    }
     public function actionPrivacy()
    {
        $model = Privacy::find()->orderBy('id')->one();
          return $this->render('privacy',[
                'model' => $model,
        ]);
    }
    public function actionTerms()
    {
        $model = Terms::find()->orderBy('id')->one();
          return $this->render('terms',[
                'model' => $model,
        ]);
    }
	public function actionLeed()
    {
        $model = Leed::find()->orderBy('id')->one();
          return $this->render('leed',[
                'model' => $model,
        ]);
    }
   
   
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            //echo "<pre>"; print_r(Yii::$app->request->post()); exit;
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }
    
    public function actionRequestPasswordResetPopup()
    {
         if (!Yii::$app->request->isAjax) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                //Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                echo "Check your email for further instructions."; exit;
                //return $this->goHome();
            } else {
                echo "Sorry, we are unable to reset password for the provided email address."; exit;
                //Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        } else{
            print_r($model->getErrors()['email'][0]); exit;
        }

        /*return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);*/
    }
    
    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
