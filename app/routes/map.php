<?php

/**
 * World list by Solar System
 */

use Gameserver\Models\Map;
use Gameserver\Models\PlotPoint;
use Gameserver\Services\JsonResponse;

$app->get(
    '/map/list/{worldId}',
    function ($worldId) {
        $maps = Map::find(
            [
                'world_id = :worldId:',
                'bind' => [
                    'worldId' => $worldId
                ]
            ]
        )->toArray();
        $echo = JsonResponse::render(
            $maps,
            [
                'related_uris' => [
                    'load_map' => '/map/load/{mapId}',
                    'resource_list_by_map' => 'resource/list/by-map/{mapId}',
                ],
            ]
        );
        echo $echo;
    }
);

$app->get(
    '/map/load/{mapId}',
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
