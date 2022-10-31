<?php

namespace Olaoluwani\UtmAnalytics\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Olaoluwani\UtmAnalytics\Models\UserAnalytics;
use Olaoluwani\UtmAnalytics\UtmAnalytics;

class UTMAnalyticsController
{
    public function save(Request $request, $user_id) {
        try {
            $validated = $request->validate([
                "utm_source" => 'required|string',
                "utm_medium" => 'required|string',
                "utm_campaign" => 'required|string',
                "utm_term" => 'required|string',
                "utm_content" => 'required|string',
            ]);

            $create = UserAnalytics::create([
                ...$validated,
                "user_id" => $user_id
            ]);

            return response()->json([
                "data" => $create,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    public function list() {
        $data = UserAnalytics::all();
        return response()->json([
            "data" => $data,
        ], 200);
    }
}
