<?php
namespace RetroAce\PackageDummyTest\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use \Route;

class RouteServiceProvider extends BaseServiceProvider
{
	protected $namespace = "RetroAce\PackageDummyTest\Controllers";

	protected function mapDashRoutes()
	{
		Route::middleware(['web', 'admin'])
			->prefix('admin')
			->namespace($this->namespace)
			->group(__DIR__ . '/../Routes/web.php');
	}

	protected function mapApiRoutes()
	{
		Route::middleware(['api', 'admin'])
			->prefix('admin/api')
			->namespace($this->namespace . "\API")
			->group(__DIR__ . '/../Routes/api.php');
	}

	public function boot()
	{
		$this->mapDashRoutes();
		$this->mapApiRoutes();
	}
}
