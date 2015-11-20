<?php
return [ 
	'vendorPath' => dirname ( dirname ( __DIR__ ) ) . '/Vendor',
	'services' => [ 
		'cache' => [ 
			'className' => 'Leaps\Cache\FileCache',
			'keyPrefix' => 'leaps_' 
		] 
	] 
];