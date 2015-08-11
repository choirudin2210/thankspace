<?php namespace Thankspace;

use Illuminate\Support\ServiceProvider;

class ThankspaceServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
    public function register()
    {
    	$this->app->bind('UserRepo', function($app)
        {
            return new \Thankspace\Repo\UserRepo(
            	new \User
        	);
        });
		
		$this->app->bind('OrderRepo', function($app)
        {
            return new \Thankspace\Repo\OrderRepo(
            	new \Order
        	);
        });
    }


    /**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}