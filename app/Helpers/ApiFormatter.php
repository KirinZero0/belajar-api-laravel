<?php

namespace App\Helpers;

class ApiFormatter{
    protected static $response = [
        'meta' => [
            'code' => null,
            'message' => null,
        ],
        'data' => null,
    ];

    public static function createApi($code = null, $message = null, $data = null)
    {
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['meta']['code']);
    }
}