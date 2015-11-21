<?php
$config = [ 
	'services' => [ 
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'yCI!p|Li6bDBdZqp.4sC5v@8o9eY]TJ3D{JJ,@Id=Ojl*vv2' 
		] 
	] 
];

if (! LEAPS_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config ['bootstrap'] [] = 'debug';
	$config ['modules'] ['debug'] = [ 
		'class' => 'yii\debug\Module' 
	];
	
	$config ['bootstrap'] [] = 'gii';
	$config ['modules'] ['gii'] = [ 
		'class' => 'yii\gii\Module' 
	];
}

return $config;
