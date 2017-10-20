<?php

/**
 * World list by Solar System
 */

use Gameserver\Models\Map;
use Gameserver\Services\JsonResponse;

$app->get(
    '/maps/list/{worldId}',
    function ($worldId) {
        $maps = Map::find(
            [
                'world_id = :worldId:',
                'bind' => [
                    'worldId' => $worldId
                ]
            ]
        )->toArray();
        $echo = JsonResponse::render($maps);
        echo $echo;
    }
);
