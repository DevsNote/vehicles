<?php

namespace backend\modules\mission\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
/**
 * Default controller for the `mission` module
 */
class DefaultController extends Controller
{
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
                    [
                        'controllers' => ['user'],
                        'actions' => ['index',],
                        'allow' => true,
                        'roles' => ['theCreator'],
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
    
    public function actionIndex()
    {
        return $this->render('index');
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
}
