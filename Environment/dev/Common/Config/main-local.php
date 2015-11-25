<?php
return [ 
	'services' => [ 
		'db' => [ 
			'className' => 'Leaps\Db\Connection',
			'dsn' => 'mysql:host=10.10.10.241;dbname=jisuyun',
			'username' => 'jisuyun',
			'password' => 'DWGm4ADar8TPYVG5',
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
