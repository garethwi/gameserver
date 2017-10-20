<?php

/**
 * World list by Solar System
 */

use Gameserver\Models\Map;
use Gameserver\Models\PlotPoint;
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

$app->get(
    '/maps/load/{mapId}',
    function ($mapId) {
        $points = PlotPoint::find(
            [
                'map_id = :mapId:',
                'bind' => [
                    'mapId' => $mapId
                ]
            ]
        )->toArray();
        $echo = JsonResponse::render($points);
        echo $echo;
    }
);
