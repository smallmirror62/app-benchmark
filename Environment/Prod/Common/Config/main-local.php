<?php
return [
    'services' => [
        'db' => [
            'className' => 'Leaps\Db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'className' => 'Leaps\Swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
