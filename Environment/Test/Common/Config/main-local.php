<?php
return [
    'services' => [
        'db' => [
            'className' => 'Leaps\Db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'className' => 'Leaps\Swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
