<?php

namespace Olaoluwani\UtmAnalytics\Controllers;

use Illuminate\Support\Facades\Http;
use Olaoluwani\UtmAnalytics\UtmAnalytics;

class UTMAnalyticsController
{
    public function saveUTMAnalytics() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
