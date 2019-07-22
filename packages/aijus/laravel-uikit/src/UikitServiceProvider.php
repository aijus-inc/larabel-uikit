<?php

namespace aijus\Uikit;

use Illuminate\Support\ServiceProvider;

class UikitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
		$this->loadRoutesFrom(app_path('Uikit/routes.php'));
		// $this->loadViewsFrom(__DIR__.'/../resources/views', 'uikit');
	}
	
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		$this->app->bind(
			'Uikit',
			'aijus\Uikit\Uikit'
		  );
	}
}
