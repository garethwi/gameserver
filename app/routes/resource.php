<?php

/**
 * World list by Solar System
 */

use Gameserver\Models\Resource;
use Gameserver\Services\JsonResponse;

$app->get(
    '/resource/list/{mapId}',
    function ($mapId) {
        $maps = Resource::find(
            [
                'map_id = :mapId:',
                'bind' => [
                    'mapId' => $mapId,
                ]
            ]
        )->toArray();
        $echo = JsonResponse::render($maps);
        echo $echo;
    }
);
