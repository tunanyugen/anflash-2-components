<?php
/**
 * This file contains all the routes for the project
 */

use Demo\Router;

Router::csrfVerifier(new \Demo\Middlewares\CsrfVerifier());

Router::setDefaultNamespace('\Demo\Controllers');

Router::group(['exceptionHandler' => \Demo\Handlers\CustomExceptionHandler::class], function () {
    // API
	// Router::group(['prefix' => '/api', 'middleware' => \Demo\Middlewares\ApiVerification::class], function () {
    //     Router::get('/', 'ApiController@index')->setName('api.index');
	// });
	// Web
	// Router::get('/', 'DefaultController@index')->setName('index');
	Router::get('/media', 'DefaultController@media')->setName('media');
	Router::get('/vr', 'DefaultController@virtualreality')->setName('vr');
	Router::get('/design', 'DefaultController@designandapplication')->setName('designandapplication');
	Router::get('/branding', 'DefaultController@graphicandbranding')->setName('branding');
	// Routes
	$routes = json_decode(file_get_contents('https://tunacoding.com/api/routes'));
	foreach($routes as $name=>$route){
		Router::get($route, 'DefaultController@index')->setName($name);
	}
});