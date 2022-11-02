<?php

use Illuminate\Support\Facades\Route;
use Olaoluwani\UtmAnalytics\Controllers\UTMAnalyticsController;

Route::post('api/utm-analytics/save/{user_id}', [UTMAnalyticsController::class, 'save']);
Route::get('api/utm-analytics', [UTMAnalyticsController::class, 'list']);
