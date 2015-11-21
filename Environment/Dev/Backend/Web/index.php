<?php
defined ( 'LEAPS_DEBUG' ) or define ( 'LEAPS_DEBUG', true );
defined ( 'LEAPS_ENV' ) or define ( 'LEAPS_ENV', 'dev' );

require (__DIR__ . '/../../Vendor/autoload.php');
require (__DIR__ . '/../../Vendor/leaps/framework/Leaps.php');
require (__DIR__ . '/../../Common/Config/bootstrap.php');
require (__DIR__ . '/../Config/bootstrap.php');

$config = Leaps\Helper\ArrayHelper::merge (
		require (__DIR__ . '/../../Common/Config/main.php'),
		require (__DIR__ . '/../../Common/Config/main-local.php'),
		require (__DIR__ . '/../Config/main.php'),
		require (__DIR__ . '/../Config/main-local.php')
);

$application = new Leaps\Web\Application ( $config );
$application->run ();
