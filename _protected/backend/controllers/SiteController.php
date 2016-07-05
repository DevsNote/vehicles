<?php
namespace backend\controllers;

use common\models\LoginForm;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;

/**
 * Site controller.
 * It is responsible for displaying static pages, and logging users in and out.
 */
class SiteController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Declares external actions for the controller.
     *
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays the index (home) page.
     * Use it in case your home page contains static content.
     *
     * @return string
     */
    public function actionIndex()
    {
        //return $this->render('index');
        //return $this->redirect(Yii::$app->basePath.'/mission/default');
        return $this->render('index', ['time' => date('H:i:s')]);
    }

    /**
     * Logs in the user if his account is activated,
     * if not, displays standard error message.
     *
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) 
        {
            return $this->goHome();
        }

        // get setting value for 'Login With Email'
        $lwe = Yii::$app->params['lwe'];

        // if "login with email" is true we instantiate LoginForm in "lwe" scenario
        $lwe ? $model = new LoginForm(['scenario' => 'lwe']) : $model = new LoginForm() ;

        // everything went fine, log in the user
        if ($model->load(Yii::$app->request->post()) && $model->login()) 
        {
            return $this->goBack();
        } 
        // errors will be displayed
        else 
        {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the user.
     *
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionJsoncalendar($start = NULL, $end = NULL, $_ = NULL) {

        Yii::$app->response->format = Response::FORMAT_JSON;

        //$times = Meeting::find()->all();
        /*
        $Event->id = $time->id;
            $Event->title = $time->title;
            $Event->start = $time->date_start;
            $Event->end = $time->date_end;
        */
        //$times = array();
        //$times[] = ['id' => '1','title' => 'Test','date_start' => '2016-07-05 08:00:00','date_end'=>'2016-07-05 16:00:00'];
       
        $events = array();
        $color = '#000000';
        foreach ($times AS $time) {
            //Testing
            $Event = new \yii2fullcalendar\models\Event();
            $Event->id = $time->id;
            $Event->title = $time->title;
            $Event->start = $time->date_start;
            $Event->end = $time->date_end;
            $Event->color = $color;
            $Event->url = Url::to(['/mission/mission/view','id'=>$time->id]);
            $events[] = $Event;
        }

        return $events;
    }
    
    public function actionAutoRefresh()
{
    return $this->render('index', ['time' => date('H:i:s')]);
}
}
