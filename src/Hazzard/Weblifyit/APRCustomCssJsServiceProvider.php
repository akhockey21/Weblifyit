<?php namespace Hazzard\Weblifyit;

use Hazzard\Support\ServiceProvider;

class APRCustomCssJsServiceProvider extends ServiceProvider {

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
		$this->app->bindShared('weblifyit.APRCustomCssJs', function($app) {
			return new APRCustomCssJs($app['db']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('weblifyit.APRCustomCssJs');
	}
}