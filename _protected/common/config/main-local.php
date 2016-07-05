<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=122.154.239.67;dbname=vehicles_db', //Web Database
            'username' => 'root',
            'password' => '01234',
            'charset' => 'utf8',
        ],
        /*
        'db_pg' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=127.0.0.1;port=5432;dbname=11242_bk', // PostgreSQL
            'username' => 'postgres',
            'password' => 'postgres',
            'charset' => 'utf8',
        ],
        'db_43pp' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;port=3306;dbname=phobphra_hos', //Takis Tak
            'username' => 'natthaphon',
            'password' => 'gwh28dgcmp',
            'charset' => 'utf8',
        ],
         * 
         */
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
