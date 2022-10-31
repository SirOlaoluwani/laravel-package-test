<?php

namespace Olaoluwani\UtmAnalytics\Providers;

use Illuminate\Support\ServiceProvider;

class UTMAnalyticsProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/../routes/web.php");
        if($this->app->runningInConsole()) {
            if(! class_exists('UserAnalytics')) {
                // php artisan vendor:publish --provider="Olaoluwani\UtmAnalytics\Providers\UTMAnalyticsProvider" --tag="migrations" to publish
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_user_analytics_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()). '_create_user_analytics_table.php'),
                ], 'migrations');
            }
        }
    }
}
