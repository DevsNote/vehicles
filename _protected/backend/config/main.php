<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
    ],
    'components' => [
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue'
                ],
            ],
        ],
        //กำหนดรูปแบบวันเวลาใน backend
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            //'dateFormat' => 'php:j M Y',
            //'datetimeFormat' => 'php:j M Y H:i',
            //'timeFormat' => 'php:H:i',
            'timeZone' => 'Asia/Bangkok',
        ],
        
        // here you can set theme used for your backend application 
        // - template comes with: 'default', 'slate', 'spacelab' and 'cerulean'
        'view' => [
            /*
             //ใช้ themes ที่ ระบบให้มา
              'theme' => [
              'pathMap' => ['@app/views' => '@webroot/themes/slate/views'],
              'baseUrl' => '@web/themes/slate',
              ],
             
             * 
             */
            
            //Set themes AdminLTE2 มาใช้งาน เฉพาะฝั่ง backend
             'theme' => [
                 'pathMap' => [
                    //'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                     '@backend/views' => '@backend/themes/adminlte/views'
                 ],
                 'baseUrl' => '@web/themes/adminlte',
             ],
             
            
            /*
             //Set themes AdminLTE2 ให้ใช้งานร่วมกันทั้ง backend และ frontend
            'theme' => [
                'pathMap' => [
                    //ใช้งานฝั่ง Backend
                    '@backend/views' => '@backend/themes/adminlte'
                    //ใช้ Themes ร่วมกันทั้ง Frontend และ Backend
                    //'@app/views' => '@common/themes/adminlte'
                ],
            ],
             * 
             */
        ],
        'user' => [
            'identityClass' => 'common\models\UserIdentity',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
