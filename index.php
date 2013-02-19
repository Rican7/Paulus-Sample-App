<?php

require_once( __DIR__ . '/vendor/autoload.php' );

define( 'PAULUS_APP_DIR',  __DIR__ . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR );
define( 'PAULUS_EXTERNAL_LIB_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR );

use \Paulus\Paulus,
	\Paulus\Router;

$app = new Paulus();

Router::any( '/?', function( $request, $response, $service ) {
	$response->data = 'Hello World';
});

$app->run();
