<?php 

namespace nnbao\Press;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Route;

class PressBaseServiceProvider extends ServiceProvider{
	public function boot(){

		$this->registerResources();

	}

	public function register(){

	}

	protected function registerResources(){
		$this->registerRoutes();
	}

	public function registerRoutes(){
		Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
	}

	public function routeConfiguration()
    {
        return [
            'prefix' => 'package',
            'namespace' => 'nnbao\Press\Http\Controllers',
        ];
    }
}