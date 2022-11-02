<?php

namespace Olaoluwani\UtmAnalytics\Controllers;

use Illuminate\Http\Request;
use Olaoluwani\UtmAnalytics\Models\UserAnalytics;

class UTMAnalyticsController
{
    public function save(Request $request, $user_id) {
        try {
            $validated = $request->validate([
                "utm_source" => 'required|string',
                "utm_parameters" => 'required|string',
            ]);

            $validated["user_id"] = $user_id;
            $create = UserAnalytics::create($validated);

            $response = [
                "data" => $create->load('user')
            ];

            return $request->wantsJson()
                ? response()->json($response, 200) : $response;
        } catch (\Exception $e) {
            $errorData = ["message" => $e->getMessage()];
            return $request->wantsJson()
                ? response()->json($errorData, 400)
                : $errorData;
        }
    }

    public function list() {
        $data = UserAnalytics::with("user")->get();

        $response = [
            "data" => $data,
        ];

        return request()->wantsJson()
            ? response()->json($response, 200) : $response;
    }
}
