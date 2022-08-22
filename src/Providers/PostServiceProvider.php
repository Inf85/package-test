<?php
namespace Mikhail\Posts\Providers;

use Illuminate\Support\ServiceProvider;
use Mikhail\Posts\Console\Commands\PostCommand;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/posts.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'posts');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/posts')
        ]);

        if ($this->app->runningInConsole()){
            $this->commands([
                PostCommand::class
            ]);
        }
    }
}
