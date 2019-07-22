<?php

return [
	'route' => [
		'prefix'
		 => env('UIKIT_ROUTE_PREFIX', 'uikit'),

		'namespace' => 'App\\Uikit\\Controllers',

		// 'middleware' => ['web', 'uikit'],
	],

	'directory' => app_path('Uikit'),

];

