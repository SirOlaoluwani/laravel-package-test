<?php

use Illuminate\Support\Facades\Route;
use Olaoluwani\UtmAnalytics\Controllers\UTMAnalyticsController;

Route::get('api/utm-analytics', [UTMAnalyticsController::class, 'saveUTMAnalytics']);
