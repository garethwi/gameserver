<?php

/**
 * World list by Solar System
 */

use Gameserver\Models\MapResource;
use Gameserver\Models\Resource;
use Gameserver\Services\JsonResponse;

$app->get(
    '/resource/list/by-map/{mapId}',
    function ($mapId) {
        $resources = MapResource::find(
            [
                'map_id = :mapId:',
                'bind' => [
                    'mapId' => $mapId,
                ]
            ]
        )->toArray();

        echo JsonResponse::render(
            $resources,
            [
                'related_uris' => [
                    'load_resources' => '/resource/load/{mapResourceId}',
                ],
            ]
        );
    }
);

$app->get(
    '/resource/load/{mapResourceId}',
    function ($mapResourceId) {
        $resources = Resource::find(
            [
                'map_resource_id = :mapId:',
                'bind' => [
                    'mapId' => $mapResourceId,
                ]
            ]
        )->toArray();

        echo JsonResponse::render($resources);
    }
);
