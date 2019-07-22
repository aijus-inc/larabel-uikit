<?php

use Illuminate\Routing\Router;

Uikit::routes();

Route::group([
	'prefix'        => config('uikit.route.prefix'),
	'namespace'     => config('uikit.route.namespace'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('uikit.home');

});