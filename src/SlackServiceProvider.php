<?php

namespace Isaacghorbani\Slack;

use function foo\func;
use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([

            __DIR__."/../database/migrations" =>base_path("database/migrations"),
            __DIR__."/../config"=>config_path("slack")


        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Slack', function(){
            return new Slack();
        });
    }
}
