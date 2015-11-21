<?php
return [ 
	'services' => [ 
		'db' => [ 
			'className' => 'Leaps\Db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=leaps',
			'username' => 'root',
			'password' => '123456',
			'charset' => 'utf8',
			'tablePrefix' => 'yun_' 
		],
		'mailer' => [ 
			'className' => 'Leaps\Swiftmailer\Mailer',
			'viewPath' => '@Common/Mail',
			'useFileTransport' => true 
		] 
	] 
];
