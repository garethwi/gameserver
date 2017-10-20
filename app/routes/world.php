<?php

/**
 * World list by Solar System
 */

use Gameserver\Models\World;
use Gameserver\Services\JsonResponse;

$app->get(
    '/world/list/{solarSystemId}',
    function ($solarSystemId) {
        $worlds = World::find(
            [
                'solar_system_id = :solarSystemId:',
                'bind' => [
                    'solarSystemId' => $solarSystemId
                ]
            ]
        )->toArray();
        $echo = JsonResponse::render(
            $worlds,
            [
                'related_urls' => [
                    'maps' => '/map/list/{world_id}',
                ],
            ]
        );
        echo $echo;
    }
);
