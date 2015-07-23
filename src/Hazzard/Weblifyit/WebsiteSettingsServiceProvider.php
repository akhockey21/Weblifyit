<?php namespace Hazzard\User;

use Hazzard\Support\ServiceProvider;

class WebsiteSettingsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('weblifyit.WebsiteSettings', function($app) {
			return new WebsiteSettings($app['db']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('weblifyit.WebsiteSettings');
	}
}