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
    }
}
