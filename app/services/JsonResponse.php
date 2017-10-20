<?php

namespace Gameserver\Services;

class JsonResponse
{
    public static function render($data, $metadata = [])
    {
        $defaultMetadata = [
            'uri' => $_SERVER['REQUEST_URI'],
            'code' => 200,
            'status' => 'ok',
        ];
        foreach ($metadata as $key => $value) {
            $defaultMetadata[$key] = $value;
        }
        return json_encode(
            [
                'metadata' => $defaultMetadata,
                'data' => $data,
            ]
        );
    }
}
