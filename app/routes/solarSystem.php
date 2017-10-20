<?php

/**
 * Solar System list by Galaxy
 */

use Gameserver\Models\SolarSystem;
use Gameserver\Services\JsonResponse;

$app->get(
    '/solar-system/list/{galaxyId}',
    function ($galaxyId) {
        $solarSystems = SolarSystem::find(
            [
                'galaxy_id = :galaxyId:',
                'bind' => [
                    'galaxyId' => $galaxyId
                ]
            ]
        )->toArray();
        $echo = JsonResponse::render(
            $solarSystems,
            [
                'related_uris' => [
                    'worlds' => '/world/list/{solar_system_id}',
                ],
            ]
        );
        echo $echo;
    }
);

