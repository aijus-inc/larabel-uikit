<?php

namespace aijus\Uikit;

class Uikit{

	public function index($str){
		echo '<pre>';
		print_r($str);
		echo '</pre>';
	}

	public function routes()
	{
		$attributes = [
            'prefix'     => config('uikit.route.prefix'),
            // 'middleware' => config('uikit.route.middleware'),
        ];

        app('router')->group($attributes, function ($router) {
			$router->get('/test',function(){
				return 'TEST';
			});
		});
	}

}