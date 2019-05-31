<?php
namespace RetroAce\PackageDummyTest\Modules\Admin;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use \Route;

class RouteServiceProvider extends BaseServiceProvider
{
	protected $namespace = "App\Modules\Admin\Controllers";

	protected function mapDashRoutes()
	{
		Route::middleware(['web', 'admin'])
			->prefix('admin')
			->namespace($this->namespace)
			->group(app_path('/Modules/Admin/Routes/web.php'));
	}

	protected function mapApiRoutes()
	{
		Route::middleware(['api', 'admin'])
			->prefix('admin/api')
			->namespace($this->namespace . "\API")
			->group(app_path('/Modules/Admin/Routes/api.php'));
	}

	public function boot()
	{
		$this->mapDashRoutes();
		$this->mapApiRoutes();
	}
}
